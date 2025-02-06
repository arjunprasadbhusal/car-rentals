@extends('layouts.master')
@section('title', 'Booking History')
@section('content')

<div class="container mx-auto mt-10">
    <!-- Title Section -->
    <div class="text-center mb-10">
        <h1 class="text-6xl font-extrabold text-gray-800">Your Bookings history</h1>
        <p class="text-lg text-gray-600 mt-2">Manage and track your vehicle bookings with ease.</p>
    </div>

    <!-- Bookings Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach ($bookings as $booking)
        <div class="border-black bg-gradient-to-br from-white to-pink-300 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-transform transform hover:scale-105">
            <div class="relative">
                <!-- Vehicle Image -->
                <img src="{{ asset('image/' . $booking->vehicle->photopath) }}" alt="{{ $booking->vehicle->Name }}" class="h-56 w-full object-cover">
                <div class="absolute top-4 left-4 bg-indigo-500 text-white text-xs font-extrabold py-1.5 px-3 rounded-full shadow-lg">
                    Booked
                </div>
                <div class="absolute top-4 right-4 bg-yellow-500 text-gray-900 text-xs font-extrabold py-1.5 px-3 rounded-full shadow-lg">
                    {{ $booking->payment_method }}
                </div>
            </div>

            <!-- Details Section -->
            <div class="p-4 space-y-2">
                <h2 class="text-2xl font-bold text-gray-900 truncate">{{ $booking->vehicle->Name }}</h2>
                <p class="text-base font-bold text-gray-800 flex items-center">
                    <i class="ri-user-line text-blue-500 mr-2"></i> <strong>Customer:</strong> {{ $booking->name }}
                </p>
                <p class="text-base text-gray-600 flex items-center">
                    <i class="ri-phone-line text-green-500 mr-2"></i> <strong>Phone:</strong> {{ $booking->phone }}
                </p>
                <p class="text-base text-gray-600 flex items-center">
                    <i class="ri-map-pin-line text-red-500 mr-2"></i> <strong>Address:</strong> {{ $booking->address }}
                </p>
                <p class="text-base text-gray-600 flex items-center">
                    <i class="ri-calendar-line text-teal-500 mr-2"></i> <strong>Pickup Date:</strong> {{ $booking->pickup_date }}
                </p>
                <p class="text-base text-gray-600 flex items-center">
                    <i class="ri-calendar-event-line text-purple-500 mr-2"></i> <strong>Return Date:</strong> {{ $booking->return_date }}
                </p>
                <p class="text-base text-gray-600 flex items-center">
                    <i class="ri-timer-line text-orange-500 mr-2"></i> <strong>Days:</strong> {{ $booking->days }}
                </p>
                <p class="text-base text-gray-600 flex items-center">
                    <i class="ri-wallet-line text-yellow-500 mr-2"></i> <strong>Total:</strong>
                    <span class="text-green-600 font-bold">${{ $booking->days * $booking->Price_Per_Day }}</span>
                </p>
            </div>

            <!-- Action Buttons -->
           

        </div>

        <div class="mt-5">
                        @if (\Carbon\Carbon::parse($booking->created_at)->diffInDays(\Carbon\Carbon::now()) <= 2 && $booking->status != 'Cancelled')
                        <div class="p-1">
                            <button data-action="{{ route('bookings.cancel', $booking->id) }}" class="cancel-booking-btn w-full bg-red-600 text-white py-2 rounded-md text-lg font-semibold hover:bg-red-700 transition duration-300">
                                Cancel Booking
                            </button>
                        </div>
                        @else
                        <div class="p-1">
                            <button class="w-full bg-gray-500 text-white rounded-md text-lg py-2  font-semibold cursor-not-allowed">
                                Cancellation Not Allowed
                            </button>
                        </div>
                        @endif
                    </div>
        @endforeach
    </div>
</div>

@endsection
