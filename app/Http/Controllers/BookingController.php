<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Bookmark;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $data = $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
            'pickup_date' => 'required|date|after_or_equal:today',
            'return_date' => 'required|date|after:pickup_date',
            'customer_email' => 'required|email',
            'payment_method' => 'required|string',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'days' => 'required|integer|max:15',
            'price_per_day' => 'required|integer|max:15',
            

        ]);
    
        // Check for conflicting bookings
        $conflictingBooking = Bookings::where('vehicle_id', $data['vehicle_id'])
            ->where(function ($query) use ($data) {
                $query->whereBetween('pickup_date', [$data['pickup_date'], $data['return_date']])
                      ->orWhereBetween('return_date', [$data['pickup_date'], $data['return_date']])
                      ->orWhere(function ($query) use ($data) {
                          $query->where('pickup_date', '<=', $data['pickup_date'])
                                ->where('return_date', '>=', $data['return_date']);
                      });
            })
            ->exists();
    
        if ($conflictingBooking) {
            return back()->with('error', 'This vehicle is already booked for the selected dates.');
        }
    
        // Create the booking
        $data['days'] = $request->input('days', 1);

        // Additional data to be stored in the Bookings
        $data['payment_method'] = "COD";
        $data['user_id'] = auth()->user()->id;
        $data['status'] = 'avaiable';
        $data['total'] = $request->Price_Per_Day * $data['days'];
        // Create the Bookings
        Bookings::create($data);

        // Remove from bookmarks if it exists
        Bookmark::where('user_id', $data['user_id'])
            ->where('vehicle_id', $data['vehicle_id'])
            ->delete();

        return redirect('/')->with('success', 'Booking has been placed successfully.');
    }


    

    public function index()
    {
        $bookings = Bookings::all();
        dd($bookings);
        return view('bookings.index', compact('bookings'));
        
    }

    public function status($id, $status)
    {
        $bookings = Bookings::find($id);

        if ($bookings) {
            $bookings->status = $status;
            $bookings->save();

            $vehicle = Vehicle::find($bookings->vehicle_id);

            $emaildata = [
                'name' => $bookings->user ? $bookings->user->name : 'Guest',
                'status' => $status,
                'vehicles' => $vehicle,
                'booking' => $bookings,
            ];

            Mail::send('bookingemail', $emaildata, function ($message) use ($bookings) {
                $message->to($bookings->user->email, $bookings->user->name)->subject('Booking Notification');
            });

            return back()->with('success', 'Booking is now ' . $status);
        }

        return back()->with('error', 'Booking not found.');
    }

    public function storeEsewa(Request $request, $bookmarkid)
    {
        $data = $request->data;
        $data = base64_decode($data);
        $data = json_decode($data);
        $status = $data->status;

        if ($status === "COMPLETE") {
            $bookmark = Bookmark::find($bookmarkid);

            if (!$bookmark) {
                return redirect('/')->with('success', 'Booking has been placed successfully');
            }

            $booking = new Bookings();
            $booking->vehicle_id = $bookmark->vehicle_id;
            $booking->days = $bookmark->days;
            $booking->Price_Per_Day = $bookmark->Price_Per_Day;
            $booking->payment_method = "eSewa";
            $booking->name = $bookmark->user->name ?? 'Guest';
            $booking->phone = 'N/A';
            $booking->address = 'N/A';
            $booking->customer_email = 'N/A';
            $booking->pickup_date = 'N/A';
            $booking->return_date = 'N/A';
            $booking->user_id = auth()->user()->id;
            $booking->status = "available";
            $booking->save();

            $bookmark->delete();

            $emaildata = [
                'name' => $booking->user ? $booking->user->name : 'Guest',
                'status' => $status,
            ];

            Mail::send('bookingemail', $emaildata, function ($message) use ($booking) {
                $message->to($booking->user->email, $booking->user->name)->subject('Booking Notification');
            });

            return redirect('/')->with('success', 'Booking has been placed successfully');
        }

        return back()->with('error', 'eSewa payment failed.');
    }
}
