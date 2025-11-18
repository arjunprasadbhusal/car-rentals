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
<div class="relative bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-20 mb-12 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Hero Content with Image -->
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <!-- Left: Text Content -->
            <div class="space-y-6 animate-fadeInUp">
                <div class="inline-block">
                    <span class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                        🚗 Premium Collection
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    Our Premium Fleet
                </h1>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Discover our extensive collection of well-maintained vehicles. From economy to luxury, find the perfect ride for your journey.
                </p>
                <div class="flex gap-4 pt-4">
                    <a href="#cars-section" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-8 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 flex items-center gap-2">
                        Browse Cars
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <a href="{{ route('Contact') }}" class="bg-white text-gray-800 px-8 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 border-2 border-gray-200">
                        Contact Us
                    </a>
                </div>
            </div>
            
            <!-- Right: Hero Image -->
            <div class="animate-fadeInUp relative" style="animation-delay: 0.2s;">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-500">
                    @if(count($cars) > 0 && isset($cars[0]->photopath))
                        <img src="{{ asset('image/' . $cars[0]->photopath) }}" 
                             alt="Featured Vehicle" 
                             class="w-full h-[400px] object-cover">
                    @else
                        <img src="{{ asset('image/car-hero.jpg') }}" 
                             alt="Premium Cars" 
                             class="w-full h-[400px] object-cover">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    
                    <!-- Floating Badge -->
                    <div class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-sm px-6 py-3 rounded-xl shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="bg-gradient-to-br from-green-400 to-emerald-500 w-12 h-12 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 font-semibold">Quality Guaranteed</p>
                                <p class="text-xs text-gray-500">All vehicles verified</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full opacity-20 blur-2xl"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full opacity-20 blur-2xl"></div>
            </div>
        </div>
        
        <!-- Filter/Stats Section -->
        <div class="grid md:grid-cols-4 gap-6 animate-fadeInUp" style="animation-delay: 0.4s;" id="cars-section">
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-blue-100 text-center transform hover:scale-105 transition">
                <div class="bg-gradient-to-br from-blue-100 to-blue-200 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                        <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">{{ count($cars) }}+</h3>
                <p class="text-gray-600 font-semibold text-sm">Total Vehicles</p>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-indigo-100 text-center transform hover:scale-105 transition">
                <div class="bg-gradient-to-br from-indigo-100 to-indigo-200 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-8 h-8 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">{{ $cars->where('is_available', true)->count() }}</h3>
                <p class="text-gray-600 font-semibold text-sm">Available Now</p>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-purple-100 text-center transform hover:scale-105 transition">
                <div class="bg-gradient-to-br from-purple-100 to-purple-200 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">4.9</h3>
                <p class="text-gray-600 font-semibold text-sm">Average Rating</p>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-pink-100 text-center transform hover:scale-105 transition">
                <div class="bg-gradient-to-br from-pink-100 to-pink-200 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-8 h-8 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold bg-gradient-to-r from-pink-600 to-red-600 bg-clip-text text-transparent">500+</h3>
                <p class="text-gray-600 font-semibold text-sm">Happy Customers</p>
            </div>
        </div>
    </div>
</div>

<!-- Cars Grid -->
<div class="container mx-auto px-6 pb-20">
    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-8">
        @foreach ($cars as $index => $car)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100 animate-slideInLeft" style="animation-delay: {{ ($index % 12) * 0.05 }}s;">
            
            <!-- Image Section -->
            <div class="relative image-zoom group">
                <img src="{{ asset('image/' . $car->photopath) }}" 
                     alt="{{ $car->Name }}" 
                     class="w-full h-56 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                
                <!-- Availability Badge -->
                @if($car->is_available)
                <div class="absolute top-4 left-4 bg-gradient-to-r from-green-500 to-emerald-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg flex items-center gap-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Available
                </div>
                @else
                <div class="absolute top-4 left-4 bg-gradient-to-r from-red-500 to-pink-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg flex items-center gap-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd"></path>
                    </svg>
                    Booked
                </div>
                @endif
                
                <!-- New/Hot Badge if applicable -->
                @if(isset($car->is_new) && $car->is_new)
                <div class="absolute top-4 right-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg animate-pulse-slow">
                    ✨ NEW
                </div>
                @elseif(isset($car->is_hot_deal) && $car->is_hot_deal)
                <div class="absolute top-4 right-4 bg-gradient-to-r from-orange-500 to-red-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg animate-pulse-slow">
                    🔥 HOT
                </div>
                @endif
            </div>

            <!-- Content Section -->
            <div class="p-6 space-y-4">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-2 line-clamp-1">{{ $car->Name }}</h2>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ $car->Brand ?? 'Premium Brand' }} • {{ $car->type ?? 'Sedan' }}</span>
                    </div>
                </div>
                
                <!-- Star Rating -->
                <div class="flex items-center gap-2">
                    <div class="flex gap-1">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= 4)
                                <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                </svg>
                            @else
                                <svg class="w-5 h-5 text-gray-300 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                </svg>
                            @endif
                        @endfor
                    </div>
                    <span class="text-sm text-gray-600 font-semibold">(4.0)</span>
                </div>
                
                <!-- Description -->
                <p class="text-gray-600 text-sm line-clamp-2 leading-relaxed" title="{{ $car->description }}">
                    {{ $car->description ?? 'Experience comfort and style with this premium vehicle. Perfect for any journey.' }}
                </p>
                
                <!-- Features -->
                <div class="flex gap-2 flex-wrap">
                    <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold border border-blue-200">
                        <svg class="w-3 h-3 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        Top Rated
                    </span>
                    <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-xs font-semibold border border-green-200">
                        <svg class="w-3 h-3 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Verified
                    </span>
                </div>
            </div>

            <!-- Price and Button -->
            <div class="px-6 pb-6 pt-3 border-t border-gray-100 bg-gradient-to-br from-blue-50/50 to-indigo-50/50">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-xs text-gray-500 mb-1">Starting from</p>
                        <h3 class="text-2xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                            Rs. {{ number_format($car->Price_Per_Day) }}
                        </h3>
                        <span class="text-xs text-gray-500">per day</span>
                    </div>
                    <a href="{{ route('viewvehicle', $car->id) }}"
                       class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 text-white px-6 py-3 rounded-xl text-sm font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 flex items-center gap-2">
                        View Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- Empty State -->
    @if(count($cars) === 0)
    <div class="text-center py-20 animate-fadeInUp">
        <div class="bg-gradient-to-br from-gray-100 to-gray-200 w-32 h-32 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3z"></path>
            </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-700 mb-3">No Vehicles Available</h3>
        <p class="text-gray-500 mb-8 max-w-md mx-auto">
            We're currently updating our fleet. Please check back soon for amazing vehicles!
        </p>
    </div>
    @endif
</div>

@endsection
