<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    // Store a new bookmark
    public function store(Request $request)
    {
        // Validate input
        $data = $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id', // Ensure the vehicle exists
             'days'=>'required|integer'
        ]);

        $data['user_id'] = auth()->user()->id;

        // Check if the bookmark already exists
        $exists = Bookmark::where('user_id', $data['user_id'])
            ->where('vehicle_id', $data['vehicle_id'])
            ->exists();

        if ($exists) {
            return back()->with('error', 'Product is already in your Bookmark list.');
        }

        // Create bookmark
        Bookmark::create($data);

        return back()->with('success', 'Product added to bookmark successfully.');
    }

    // Display all bookmarks for the authenticated user
    public function mybookmark()
    {
        $bookmarks = Bookmark::with('vehicle') // Eager load vehicle relationship
            ->where('user_id', auth()->user()->id)
            ->get();

        // Fetch all vehicles for the booking form
        $vehicles = Vehicle::all();

        return view('bookmark', compact('bookmarks', 'vehicles'));
    }

    // Delete a specific bookmark
    public function destroy(Request $request)
    {
        $bookmark = Bookmark::findOrFail($request->dataid);

        // Ensure the user owns the bookmark
        if ($bookmark->user_id != auth()->user()->id) {
            return back()->with('error', 'Unauthorized action.');
        }

        $bookmark->delete();

        return back()->with('success', 'Car removed from bookmark successfully.');
    }

    // Checkout a specific bookmark
    public function checkout($id)
    {
        $bookmark = Bookmark::with('vehicle') // Eager load vehicle relationship
            ->findOrFail($id);

        if ($bookmark->user_id != auth()->user()->id) {
            return back()->with('error', 'Unauthorized user.');
        }

        return view('checkout', compact('bookmark'));
    }
}