@extends('layouts.master')
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
    
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
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
    
    .animate-slideInRight {
        animation: slideInRight 0.6s ease-out;
    }
    
    .progress-step {
        transition: all 0.3s ease;
    }
    
    .progress-step.active {
        background: linear-gradient(135deg, #3b82f6, #6366f1);
        color: white;
    }
</style>

<!-- Page Header -->
<div class="relative bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-16 mb-12">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="animation-delay: 1s;"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center space-y-4 animate-fadeInUp">
            <div class="inline-block">
                <span class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                    🛒 Secure Checkout
                </span>
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
                Complete Your Booking
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                You're just one step away from your perfect ride!
            </p>
        </div>
        
        <!-- Progress Steps -->
        <div class="flex justify-center items-center gap-4 mt-12 flex-wrap">
            <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-full shadow-lg border border-blue-200">
                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-green-500 to-emerald-600 flex items-center justify-center text-white font-bold">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-700">Vehicle Selected</span>
            </div>
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <div class="flex items-center gap-2 bg-gradient-to-r from-blue-500 to-indigo-600 px-4 py-2 rounded-full shadow-lg">
                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-blue-600 font-bold">2</div>
                <span class="text-sm font-semibold text-white">Checkout</span>
            </div>
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-full shadow-lg border border-gray-200">
                <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-bold">3</div>
                <span class="text-sm font-semibold text-gray-600">Confirmation</span>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Left Column: Vehicle Details & Specs -->
        <div class="lg:col-span-2 space-y-8">
            
            <!-- Vehicle Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 animate-fadeInUp">
                <div class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 px-6 py-4">
                    <h2 class="text-2xl font-bold text-white flex items-center gap-2">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                            <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                        </svg>
                        Your Selected Vehicle
                    </h2>
                </div>
                
                <div class="p-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="relative group overflow-hidden rounded-xl">
                            <img src="{{ asset('image/' . $bookmark->vehicle->photopath) }}" 
                                 alt="{{ $bookmark->vehicle->Name }}" 
                                 class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-3 py-1 rounded-full text-xs font-bold inline-flex items-center gap-1 shadow-lg">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Available
                                </span>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-3xl font-bold text-gray-900 mb-2">{{ $bookmark->vehicle->Name }}</h3>
                                <p class="text-gray-600 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $bookmark->vehicle->Brand ?? 'Premium Brand' }}
                                </p>
                            </div>
                            
                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-4 space-y-3 border border-blue-200">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600 font-semibold">Price per day</span>
                                    <span class="text-xl font-bold text-gray-900">Rs. {{ number_format($bookmark->vehicle->Price_Per_Day) }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600 font-semibold">Rental duration</span>
                                    <span class="text-xl font-bold text-indigo-600">{{ $bookmark->days }} {{ $bookmark->days == 1 ? 'Day' : 'Days' }}</span>
                                </div>
                                <div class="pt-3 border-t-2 border-blue-300 flex justify-between items-center">
                                    <span class="text-gray-900 font-bold text-lg">Total Amount</span>
                                    <span class="text-3xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                                        Rs. {{ number_format($bookmark->vehicle->Price_Per_Day * $bookmark->days) }}
                                    </span>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-2 text-sm text-gray-600 bg-green-50 px-4 py-2 rounded-lg border border-green-200">
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-semibold">Free cancellation up to 24 hours before pickup</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Vehicle Specifications -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 animate-fadeInUp" style="animation-delay: 0.2s;">
                <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 px-6 py-4">
                    <h2 class="text-2xl font-bold text-white flex items-center gap-2">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                        </svg>
                        Vehicle Specifications
                    </h2>
                </div>
                
                <div class="p-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 border border-gray-200 hover:border-indigo-300 hover:shadow-md transition">
                            <div class="bg-gradient-to-br from-blue-100 to-blue-200 w-12 h-12 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold">Body Type</p>
                                <p class="text-gray-900 font-bold">Sedan</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 border border-gray-200 hover:border-indigo-300 hover:shadow-md transition">
                            <div class="bg-gradient-to-br from-indigo-100 to-indigo-200 w-12 h-12 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold">Seats</p>
                                <p class="text-gray-900 font-bold">2 Seats</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 border border-gray-200 hover:border-indigo-300 hover:shadow-md transition">
                            <div class="bg-gradient-to-br from-purple-100 to-purple-200 w-12 h-12 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold">Doors</p>
                                <p class="text-gray-900 font-bold">2 Doors</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 border border-gray-200 hover:border-indigo-300 hover:shadow-md transition">
                            <div class="bg-gradient-to-br from-pink-100 to-pink-200 w-12 h-12 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold">Fuel Type</p>
                                <p class="text-gray-900 font-bold">Hybrid</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 border border-gray-200 hover:border-indigo-300 hover:shadow-md transition">
                            <div class="bg-gradient-to-br from-green-100 to-green-200 w-12 h-12 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold">Engine</p>
                                <p class="text-gray-900 font-bold">3000 CC</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 border border-gray-200 hover:border-indigo-300 hover:shadow-md transition">
                            <div class="bg-gradient-to-br from-orange-100 to-orange-200 w-12 h-12 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold">Year</p>
                                <p class="text-gray-900 font-bold">{{ $bookmark->vehicle->Model ?? '2024' }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 border border-gray-200 hover:border-indigo-300 hover:shadow-md transition">
                            <div class="bg-gradient-to-br from-cyan-100 to-cyan-200 w-12 h-12 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold">Transmission</p>
                                <p class="text-gray-900 font-bold">Automatic</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-4 border border-gray-200 hover:border-indigo-300 hover:shadow-md transition">
                            <div class="bg-gradient-to-br from-teal-100 to-teal-200 w-12 h-12 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-semibold">Drive</p>
                                <p class="text-gray-900 font-bold">4WD</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Booking Form -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden sticky top-24 animate-slideInRight">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-2xl font-bold text-white flex items-center gap-2">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Booking Details
                    </h3>
                </div>

                <form action="{{ route('bookings.store') }}" method="POST" id="checkout-form" class="p-6 space-y-5">
                    @csrf
                    <!-- Hidden Inputs -->
                    <input type="hidden" name="vehicle_id" value="{{ $bookmark->vehicle_id }}">
                    <input type="hidden" name="Price_Per_Day" value="{{ $bookmark->vehicle->Price_Per_Day * ($bookmark->days ?? 1) }}">
                    <input type="hidden" name="bookmark_id" value="{{ $bookmark->id }}">
                    <input type="hidden" name="days" value="{{ $bookmark->days ?? 1 }}">
                    <input type="hidden" name="ppd" value="{{ $bookmark->vehicle->Price_Per_Day }}">

                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-bold text-gray-700 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                            Full Name
                        </label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" 
                               value="{{ auth()->user()->name }}" 
                               class="w-full border-2 border-gray-200 rounded-xl p-3 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" required>
                    </div>

                    <!-- Address Field -->
                    <div>
                        <label for="address" class="block text-sm font-bold text-gray-700 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Address
                        </label>
                        <input type="text" id="address" name="address" placeholder="Your address" 
                               value="{{ auth()->user()->address }}" 
                               class="w-full border-2 border-gray-200 rounded-xl p-3 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition" required>
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="phone" class="block text-sm font-bold text-gray-700 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            Phone Number
                        </label>
                        <input type="text" id="phone" name="phone" placeholder="Your phone number" 
                               value="{{ auth()->user()->phone }}" 
                               class="w-full border-2 border-gray-200 rounded-xl p-3 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition" required>
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="customer_email" class="block text-sm font-bold text-gray-700 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            Email Address
                        </label>
                        <input type="email" id="customer_email" name="customer_email" placeholder="your@email.com" 
                               value="{{ auth()->user()->email }}" 
                               class="w-full border-2 border-gray-200 rounded-xl p-3 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition" required>
                    </div>

                    <!-- Pickup Date -->
                    <div>
                        <label for="pickup_date" class="block text-sm font-bold text-gray-700 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            Pickup Date
                        </label>
                        <input type="date" id="pickup_date" name="pickup_date" 
                               class="w-full border-2 border-gray-200 rounded-xl p-3 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition" 
                               onchange="updateReturnDate(this.value)" required>
                    </div>

                    <!-- Return Date -->
                    <div>
                        <label for="return_date" class="block text-sm font-bold text-gray-700 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            Return Date
                        </label>
                        <input type="date" id="return_date" name="return_date" 
                               class="w-full border-2 border-gray-200 rounded-xl p-3 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition" required>
                    </div>

                    <!-- Payment Method -->
                    <div>
                        <label for="payment_method" class="block text-sm font-bold text-gray-700 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                                <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                            </svg>
                            Payment Method
                        </label>
                        <select name="payment_method" id="payment_method" 
                                class="w-full border-2 border-gray-200 rounded-xl p-3 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" required>
                            <option value="" disabled selected>Select payment method</option>
                            <option value="COD" class="py-2">💵 Cash On Delivery</option>
                            <option value="ESEWA" class="py-2">💳 Pay with eSewa</option>
                        </select>
                    </div>

                    <!-- Total Summary -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-5 border-2 border-blue-200">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600 font-semibold">Subtotal</span>
                            <span class="text-gray-900 font-bold">Rs. {{ number_format($bookmark->vehicle->Price_Per_Day * $bookmark->days) }}</span>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-gray-600 font-semibold">Tax & Fees</span>
                            <span class="text-green-600 font-bold">Included</span>
                        </div>
                        <div class="pt-3 border-t-2 border-blue-300 flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900">Total Amount</span>
                            <span class="text-2xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                                Rs. {{ number_format($bookmark->vehicle->Price_Per_Day * $bookmark->days) }}
                            </span>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-bold py-4 rounded-xl transition transform hover:scale-105 shadow-xl flex items-center justify-center gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Complete Booking
                    </button>
                    
                    <!-- Security Badge -->
                    <div class="flex items-center justify-center gap-2 text-sm text-gray-500 pt-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-semibold">Secure & encrypted payment</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- eSewa Form -->
<form id="esewa-form" action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST" class="hidden">
    <input type="hidden" id="amount" name="amount" value="100" required>
    <input type="hidden" id="tax_amount" name="tax_amount" value="0" required>
    <input type="hidden" id="total_amount" name="total_amount" value="100" required>
    <input type="hidden" id="transaction_uuid" name="transaction_uuid" value="241028" required>
    <input type="hidden" id="product_code" name="product_code" value="EPAYTEST" required>
    <input type="hidden" id="product_service_charge" name="product_service_charge" value="0" required>
    <input type="hidden" id="product_delivery_charge" name="product_delivery_charge" value="0" required>
    <input type="hidden" id="success_url" name="success_url" value="{{ route('bookings.storeEsewa', $bookmark->id) }}" required>
    <input type="hidden" id="failure_url" name="failure_url" value="{{ route('mybookmark') }}" required>
    <input type="hidden" id="signed_field_names" name="signed_field_names" value="total_amount,transaction_uuid,product_code" required>
    <input type="hidden" id="signature" name="signature" value="" required>
</form>

@php
    $total_amount = $bookmark->vehicle->Price_Per_Day * $bookmark->days;
    $transaction_uuid = time();
    $msg = "total_amount=$total_amount,transaction_uuid=$transaction_uuid,product_code=EPAYTEST";
    $secret = "8gBm/:&EnhH.1/q";
    $s = hash_hmac('sha256', $msg, $secret, true);
    $signature = base64_encode($s);
@endphp

<script>
    function updateReturnDate(pickupValue) {
        if(!pickupValue) return;

        const pickupDate = new Date(pickupValue);
        const days = {{ $bookmark->days }};
        const returnDate = new Date(pickupDate);
        returnDate.setDate(pickupDate.getDate() + days);

        const returnDateInput = document.getElementById('return_date');
        returnDateInput.value = returnDate.toISOString().split('T')[0];
        returnDateInput.setAttribute('min', returnDate.toISOString().split('T')[0]);
    }

    document.addEventListener("DOMContentLoaded", function () {
        const today = new Date().toISOString().split("T")[0];
        const pickupDateInput = document.getElementById("pickup_date");
        const returnDateInput = document.getElementById("return_date");

        // Disable past dates for pickup date
        pickupDateInput.setAttribute("min", today);

        pickupDateInput.addEventListener("change", function () {
            const pickupDate = new Date(this.value);

            if (pickupDate) {
                const minReturnDate = new Date(pickupDate);
                minReturnDate.setDate(minReturnDate.getDate() + 1); // Return date must be after pickup date
                returnDateInput.setAttribute("min", minReturnDate.toISOString().split("T")[0]);

                if (new Date(returnDateInput.value) <= pickupDate) {
                    returnDateInput.value = ""; // Clear invalid return date
                }
            }
        });

        // Setup eSewa signature and values
        document.getElementById('amount').value = "{{ $total_amount }}";
        document.getElementById('total_amount').value = "{{ $total_amount }}";
        document.getElementById('transaction_uuid').value = "{{ $transaction_uuid }}";
        document.getElementById('signature').value = "{{ $signature }}";

        // Handle form submission based on payment method
        document.getElementById('checkout-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const paymentMethod = document.getElementById('payment_method').value;
            if(!paymentMethod) {
                alert('Please select a payment method.');
                return;
            }

            if(paymentMethod === 'ESEWA') {
                document.getElementById('esewa-form').submit();
            } else if(paymentMethod === 'COD') {
                this.submit();
            } else {
                alert('Invalid payment method selected.');
            }
        });
    });
</script>

@endsection
