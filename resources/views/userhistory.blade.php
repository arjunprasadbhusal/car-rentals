@extends('layouts.master')
@section('title', 'Booking History')
@section('content')

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes pulse-slow {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }
    
    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease-out;
    }
    
    .animate-slideInLeft {
        animation: slideInLeft 0.6s ease-out;
    }
    
    .card-hover {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px -12px rgba(59, 130, 246, 0.4);
    }
    
    .image-zoom {
        overflow: hidden;
    }
    
    .image-zoom img {
        transition: transform 0.5s ease;
    }
    
    .image-zoom:hover img {
        transform: scale(1.1);
    }
</style>

<!-- Page Header -->
<div class="relative bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-20 mb-12">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center space-y-6 animate-fadeInUp">
            <div class="inline-block">
                <span class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                    📋 Your Journey Records
                </span>
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
                Booking History
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Track and manage all your vehicle bookings in one place. View past rentals and active bookings.
            </p>
        </div>
        
        <!-- Stats Section -->
        <div class="grid md:grid-cols-3 gap-6 mt-12 animate-fadeInUp" style="animation-delay: 0.2s;">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-blue-100 text-center">
                <div class="bg-gradient-to-br from-blue-100 to-blue-200 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="ri-calendar-check-line text-blue-600 text-3xl"></i>
                </div>
                <h3 class="text-3xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">{{ $bookings->count() }}</h3>
                <p class="text-gray-600 font-semibold text-sm">Total Bookings</p>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-green-100 text-center">
                <div class="bg-gradient-to-br from-green-100 to-green-200 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="ri-car-line text-green-600 text-3xl"></i>
                </div>
                <h3 class="text-3xl font-extrabold bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">{{ $bookings->where('status', '!=', 'Cancelled')->count() }}</h3>
                <p class="text-gray-600 font-semibold text-sm">Active Rentals</p>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-purple-100 text-center">
                <div class="bg-gradient-to-br from-purple-100 to-purple-200 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="ri-money-dollar-circle-line text-purple-600 text-3xl"></i>
                </div>
                <h3 class="text-3xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">Rs. {{ number_format($bookings->sum(function($b) { return $b->days * $b->Price_Per_Day; })) }}</h3>
                <p class="text-gray-600 font-semibold text-sm">Total Spent</p>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 pb-20">
    <!-- Bookings Grid -->
    @if($bookings->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($bookings as $index => $booking)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100 animate-slideInLeft" style="animation-delay: {{ ($index % 12) * 0.05 }}s;">
                
                <!-- Vehicle Image -->
                <div class="relative image-zoom">
                    <img src="{{ asset('image/' . $booking->vehicle->photopath) }}" 
                         alt="{{ $booking->vehicle->Name }}" 
                         class="h-56 w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    
                    <!-- Status Badge -->
                    @if($booking->status == 'Cancelled')
                    <div class="absolute top-4 left-4 bg-gradient-to-r from-red-500 to-pink-600 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg flex items-center gap-2">
                        <i class="ri-close-circle-fill"></i>
                        Cancelled
                    </div>
                    @else
                    <div class="absolute top-4 left-4 bg-gradient-to-r from-green-500 to-emerald-600 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg flex items-center gap-2">
                        <i class="ri-check-circle-fill"></i>
                        Active
                    </div>
                    @endif
                    
                    <!-- Payment Method Badge -->
                    <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-sm text-gray-900 px-4 py-2 rounded-full text-xs font-bold shadow-lg flex items-center gap-2">
                        <i class="ri-wallet-3-line text-blue-600"></i>
                        {{ $booking->payment_method }}
                    </div>
                    
                    <!-- Booking ID -->
                    <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1 rounded-lg text-xs font-bold text-gray-700">
                        #{{ $booking->id }}
                    </div>
                </div>

                <!-- Booking Details -->
                <div class="p-6 space-y-4">
                    <h2 class="text-2xl font-bold text-gray-900 line-clamp-1">{{ $booking->vehicle->Name }}</h2>
                    
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <div class="bg-blue-100 w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="ri-user-line text-blue-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 font-semibold">Customer</p>
                                <p class="text-sm font-bold text-gray-900">{{ $booking->name }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 text-sm">
                            <div class="bg-green-100 w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="ri-phone-line text-green-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 font-semibold">Phone</p>
                                <p class="text-sm font-bold text-gray-900">{{ $booking->phone }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 text-sm">
                            <div class="bg-red-100 w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="ri-map-pin-line text-red-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 font-semibold">Address</p>
                                <p class="text-sm font-bold text-gray-900 line-clamp-1">{{ $booking->address }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Date Range -->
                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-4 border border-indigo-100">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-xs text-gray-600 font-semibold mb-1 flex items-center gap-1">
                                    <i class="ri-calendar-line"></i>
                                    Pickup
                                </p>
                                <p class="text-sm font-bold text-gray-900">{{ \Carbon\Carbon::parse($booking->pickup_date)->format('M d, Y') }}</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-600 font-semibold mb-1 flex items-center gap-1">
                                    <i class="ri-calendar-check-line"></i>
                                    Return
                                </p>
                                <p class="text-sm font-bold text-gray-900">{{ \Carbon\Carbon::parse($booking->return_date)->format('M d, Y') }}</p>
                            </div>
                        </div>
                        <div class="mt-3 pt-3 border-t border-indigo-200">
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-600 font-semibold flex items-center gap-1">
                                    <i class="ri-timer-line"></i>
                                    Duration
                                </span>
                                <span class="text-sm font-bold text-indigo-600">{{ $booking->days }} {{ $booking->days == 1 ? 'Day' : 'Days' }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Total Cost -->
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-4 border border-green-200">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 font-semibold">Total Amount</span>
                            <span class="text-2xl font-extrabold bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">
                                Rs. {{ number_format($booking->days * $booking->Price_Per_Day) }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="px-6 pb-6">
                    @if(\Carbon\Carbon::parse($booking->created_at)->diffInDays(now()) <= 2 && $booking->status != 'Cancelled')
                        <form action="{{ route('booking.cancel', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this booking? This action cannot be undone.');">
                            @csrf
                            <button type="submit" class="w-full bg-gradient-to-r from-red-500 to-pink-600 hover:from-red-600 hover:to-pink-700 text-white font-bold py-3 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105 flex items-center justify-center gap-2">
                                <i class="ri-close-circle-line text-xl"></i>
                                Cancel Booking
                            </button>
                        </form>
                    @else
                        <button disabled class="w-full bg-gray-200 cursor-not-allowed text-gray-500 font-bold py-3 rounded-xl flex items-center justify-center gap-2">
                            <i class="ri-lock-line"></i>
                            @if($booking->status == 'Cancelled')
                                Already Cancelled
                            @else
                                Cancellation Period Expired
                            @endif
                        </button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    @else
    <!-- Empty State -->
    <div class="text-center py-20 animate-fadeInUp">
        <div class="bg-gradient-to-br from-gray-100 to-gray-200 w-32 h-32 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="ri-inbox-line text-gray-400 text-6xl"></i>
        </div>
        <h3 class="text-3xl font-bold text-gray-700 mb-3">No Bookings Yet</h3>
        <p class="text-gray-500 mb-8 max-w-md mx-auto">
            You haven't made any bookings yet. Start exploring our amazing fleet of vehicles!
        </p>
        <a href="{{ route('Cars') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-8 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition">
            <i class="ri-car-line text-xl"></i>
            Browse Vehicles
        </a>
    </div>
    @endif
</div>

@endsection
