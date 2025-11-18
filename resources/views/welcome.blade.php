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
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }
    
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }
    
    @keyframes shimmer {
        0% {
            background-position: -1000px 0;
        }
        100% {
            background-position: 1000px 0;
        }
    }
    
    .animate-fadeInUp {
        animation: fadeInUp 1s ease-out;
    }
    
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
    
    .animate-slideInLeft {
        animation: slideInLeft 1s ease-out;
    }
    
    .animate-pulse-slow {
        animation: pulse 2s ease-in-out infinite;
    }
    
    .hero-gradient {
        background: linear-gradient(135deg, 
            rgba(6, 182, 212, 0.95) 0%, 
            rgba(14, 165, 233, 0.95) 25%,
            rgba(59, 130, 246, 0.95) 50%,
            rgba(99, 102, 241, 0.95) 75%,
            rgba(139, 92, 246, 0.95) 100%);
        background-size: 400% 400%;
        animation: gradientShift 15s ease infinite;
    }
    
    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    .card-hover {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .card-hover:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 25px 50px -12px rgba(59, 130, 246, 0.5);
    }
    
    .text-gradient {
        background: linear-gradient(135deg, #06b6d4 0%, #3b82f6 50%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: gradientShift 3s ease infinite;
    }
    
    .text-gradient-orange {
        background: linear-gradient(135deg, #f59e0b 0%, #f97316 50%, #ef4444 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .bg-pattern {
        background-color: #f0f9ff;
        background-image: 
            radial-gradient(at 40% 20%, rgba(59, 130, 246, 0.1) 0px, transparent 50%),
            radial-gradient(at 80% 0%, rgba(139, 92, 246, 0.1) 0px, transparent 50%),
            radial-gradient(at 0% 50%, rgba(6, 182, 212, 0.1) 0px, transparent 50%),
            radial-gradient(at 100% 100%, rgba(251, 146, 60, 0.1) 0px, transparent 50%);
    }
    
    .shimmer-effect {
        background: linear-gradient(
            90deg,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.3) 50%,
            rgba(255, 255, 255, 0) 100%
        );
        background-size: 1000px 100%;
        animation: shimmer 3s infinite;
    }
</style>

<!-- Hero Section -->
<header class="relative min-h-screen overflow-hidden bg-white">
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center min-h-screen py-20">
            <!-- Left Content -->
            <div class="space-y-8 animate-fadeInUp">
                <div class="inline-block">
                    <span class="bg-gradient-to-r from-cyan-500 via-blue-500 to-indigo-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                        🚗 Premium Car Rental Service
                    </span>
                </div>
                
                <div>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight text-gray-900 mb-4">
                        Welcome to 
                        <span class="bg-gradient-to-r from-cyan-500 via-blue-600 to-purple-600 bg-clip-text text-transparent block mt-2 animate-pulse-slow">Rently</span>
                    </h1>
                    <div class="h-2 w-32 bg-gradient-to-r from-orange-400 via-red-500 to-pink-500 rounded-full mb-6 shadow-lg"></div>
                </div>
                
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 animate-slideInLeft" style="animation-delay: 0.2s;">
                    Looking for a <span class="bg-gradient-to-r from-amber-500 via-orange-500 to-red-500 bg-clip-text text-transparent">Perfect Ride?</span>
                </h2>
                
                <p class="text-xl md:text-2xl text-gray-600 leading-relaxed animate-fadeInUp" style="animation-delay: 0.4s;">
                    You're at the right place. Experience seamless car rentals with unbeatable service and prices. Choose from our premium fleet and hit the road today!
                </p>
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 py-6 animate-fadeInUp" style="animation-delay: 0.5s;">
                    <div class="text-center bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-4 border border-cyan-200 shadow-lg hover:shadow-xl transition">
                        <div class="text-3xl md:text-4xl font-extrabold bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent mb-1">500+</div>
                        <div class="text-sm text-gray-700 font-semibold">Happy Clients</div>
                    </div>
                    <div class="text-center bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-4 border border-indigo-200 shadow-lg hover:shadow-xl transition">
                        <div class="text-3xl md:text-4xl font-extrabold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-1">50+</div>
                        <div class="text-sm text-gray-700 font-semibold">Vehicles</div>
                    </div>
                    <div class="text-center bg-gradient-to-br from-pink-50 to-red-50 rounded-2xl p-4 border border-pink-200 shadow-lg hover:shadow-xl transition">
                        <div class="text-3xl md:text-4xl font-extrabold bg-gradient-to-r from-pink-600 to-red-600 bg-clip-text text-transparent mb-1">24/7</div>
                        <div class="text-sm text-gray-700 font-semibold">Support</div>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 animate-fadeInUp" style="animation-delay: 0.6s;">
                    <a href="{{ route('Cars') }}" class="bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-600 hover:from-cyan-600 hover:via-blue-700 hover:to-indigo-700 text-white font-bold py-4 px-8 rounded-full text-lg shadow-xl transform hover:scale-105 transition duration-300 text-center">
                        🚗 Browse Cars Now
                    </a>
                    <a href="#features" class="bg-white hover:bg-gray-50 text-gray-800 font-bold py-4 px-8 rounded-full text-lg border-2 border-gray-300 shadow-lg transform hover:scale-105 transition duration-300 text-center">
                        ✨ Learn More
                    </a>
                </div>
                
                <!-- Trust Badges -->
                <div class="flex items-center gap-6 pt-4 animate-fadeInUp" style="animation-delay: 0.7s;">
                    <div class="flex items-center gap-2 bg-amber-50 px-4 py-2 rounded-full border border-amber-200">
                        <svg class="w-6 h-6 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <span class="text-gray-800 font-semibold text-sm">4.9/5.0 Rating</span>
                    </div>
                    <div class="flex items-center gap-2 bg-emerald-50 px-4 py-2 rounded-full border border-emerald-200">
                        <svg class="w-6 h-6 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-800 font-semibold text-sm">Verified & Trusted</span>
                    </div>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="relative animate-fadeInUp" style="animation-delay: 0.3s;">
                <div class="relative">
                    <!-- Background Decoration -->
                    <div class="absolute -top-8 -right-8 w-72 h-72 bg-gradient-to-br from-cyan-200 to-blue-300 rounded-3xl opacity-40 blur-3xl animate-float"></div>
                    <div class="absolute -bottom-8 -left-8 w-72 h-72 bg-gradient-to-br from-purple-200 to-pink-300 rounded-3xl opacity-40 blur-3xl animate-float" style="animation-delay: 1s;"></div>
                    
                    <!-- Main Image Container -->
                    <div class="relative z-10">
                        <div class="bg-gradient-to-br from-cyan-500 via-blue-600 to-purple-600 rounded-3xl p-2 shadow-2xl transform hover:scale-105 transition duration-500">
                            <img src="{{ asset('hello.png') }}" 
                                 alt="Rently Car Rental" 
                                 class="w-full h-auto rounded-2xl object-cover shadow-lg">
                        </div>
                        
                        <!-- Floating Badge 1 -->
                        <div class="absolute -top-6 -left-6 bg-white rounded-2xl p-4 shadow-2xl animate-float border border-cyan-200">
                            <div class="flex items-center gap-3">
                                <div class="bg-gradient-to-br from-cyan-500 to-blue-600 w-12 h-12 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">100%</div>
                                    <div class="text-xs text-gray-600 font-semibold">Safe & Secure</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Badge 2 -->
                        <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-4 shadow-2xl animate-float border border-orange-200" style="animation-delay: 0.5s;">
                            <div class="flex items-center gap-3">
                                <div class="bg-gradient-to-br from-orange-500 to-red-600 w-12 h-12 rounded-xl flex items-center justify-center shadow-lg">
                                    <span class="text-2xl">🏆</span>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">#1</div>
                                    <div class="text-xs text-gray-600 font-semibold">Rated Service</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-float z-10">
        <a href="#features" class="flex flex-col items-center gap-2 text-gray-700 hover:text-blue-600 transition">
            <span class="text-sm font-semibold">Scroll Down</span>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </a>
    </div>
</header>
                
               
                
               
                
               
          
                
        
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-float z-10">
        <a href="#features" class="flex flex-col items-center gap-2 text-blue-700 hover:text-indigo-800 transition">
            <span class="text-sm font-semibold">Scroll Down</span>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </a>
    </div>
</header>

<!-- Features Section -->
<section id="features" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-extrabold text-gradient mb-4">Why Choose Rently?</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Experience the best car rental service with unmatched benefits</p>
        </div>
        
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 text-center border-t-4 border-cyan-500">
                <div class="bg-gradient-to-br from-cyan-100 to-cyan-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl">💰</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Best Prices</h3>
                <p class="text-gray-600">Competitive rates with no hidden charges</p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 text-center border-t-4 border-blue-500">
                <div class="bg-gradient-to-br from-blue-100 to-blue-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl">🔧</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Well Maintained</h3>
                <p class="text-gray-600">Regular service checks for your safety</p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 text-center border-t-4 border-indigo-500">
                <div class="bg-gradient-to-br from-indigo-100 to-indigo-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl">⚡</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Quick Booking</h3>
                <p class="text-gray-600">Reserve your car in just a few clicks</p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 text-center border-t-4 border-purple-500">
                <div class="bg-gradient-to-br from-purple-100 to-purple-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl">🛡️</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">24/7 Support</h3>
                <p class="text-gray-600">Round-the-clock assistance available</p>
            </div>
        </div>
    </div>
</section>

<!-- Popular Cars Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-extrabold text-gradient mb-4">Our Premium Fleet</h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Choose from our extensive collection of well-maintained vehicles</p>
            <div class="mt-6 flex justify-center gap-4 flex-wrap">
                <span class="bg-gradient-to-r from-cyan-500 via-blue-500 to-indigo-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                    ✨ New Arrivals
                </span>
                <span class="bg-gradient-to-r from-orange-500 via-red-500 to-pink-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                    🔥 Hot Deals
                </span>
            </div>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-10">
            @foreach ($vehicles as $vehicle)
            <div class="relative rounded-2xl shadow-xl bg-white overflow-hidden card-hover border border-gray-100">
                
                <!-- New or Hot Deal Ribbons -->
                @if($vehicle->is_new)
                <div class="absolute top-4 left-4 bg-gradient-to-r from-cyan-500 via-blue-500 to-indigo-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg z-10 animate-pulse-slow">
                    ✨ NEW
                </div>
                @endif
                @if($vehicle->is_hot_deal)
                <div class="absolute top-4 right-4 bg-gradient-to-r from-orange-500 via-red-500 to-pink-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg z-10 animate-pulse-slow">
                    🔥 HOT
                </div>
                @endif

                <!-- Image with Overlay -->
                <div class="relative overflow-hidden group">
                    <img src="{{ asset('image/'.$vehicle->photopath) }}" 
                         alt="{{ $vehicle->Name }}" 
                         class="h-52 w-full object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                </div>

                <!-- Vehicle Info -->
                <div class="p-5 space-y-3">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold text-gray-800 leading-tight">{{ $vehicle->Name }}</h3>
                        <span class="text-xs font-semibold px-2 py-1 rounded-full {{ $vehicle->is_available ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ $vehicle->is_available ? '✓ Available' : '✕ Booked' }}
                        </span>
                    </div>
                    
                    <div class="flex items-center gap-4 text-sm text-gray-600">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6z"></path>
                            </svg>
                            {{ $vehicle->type }}
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $vehicle->Brand }}
                        </span>
                    </div>

                    <!-- Stars with better styling -->
                    <div class="flex items-center gap-1">
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
                        <span class="text-sm text-gray-600 ml-2">(4.0)</span>
                    </div>

                    <p class="text-gray-600 text-sm line-clamp-2 leading-relaxed" title="{{ $vehicle->description }}">
                        {{ $vehicle->description }}
                    </p>
                </div>

                <!-- Price and Button -->
                <div class="px-5 pb-5 pt-3 border-t border-gray-100 flex justify-between items-center bg-gradient-to-br from-blue-50 to-indigo-50">
                    <div>
                        <p class="text-xs text-gray-500 mb-1">Starting from</p>
                        <h4 class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600">
                            Rs. {{ number_format($vehicle->Price_Per_Day) }}
                        </h4>
                        <span class="text-xs text-gray-500">per day</span>
                    </div>
                    <a href="{{ route('viewvehicle', $vehicle->id) }}"
                       class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 text-white px-6 py-3 rounded-xl text-sm font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 flex items-center gap-2">
                        View Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="{{ route('Cars') }}" class="inline-block bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 text-white font-bold py-4 px-10 rounded-full text-lg shadow-2xl transform hover:scale-105 transition duration-300">
                View All Vehicles →
            </a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="bg-gray-50 py-20 relative overflow-hidden">
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-extrabold text-gradient mb-4">What Our Customers Say</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Real experiences from real customers who love our service</p>
            <div class="mt-6">
                <div class="flex justify-center items-center gap-2">
                    @for($i = 1; $i <= 5; $i++)
                        <svg class="w-8 h-8 text-amber-400 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    @endfor
                    <span class="text-gray-800 font-bold text-xl ml-3">4.9/5.0</span>
                </div>
                <p class="text-gray-600 text-sm mt-2">Based on 500+ reviews</p>
            </div>
        </div>
        
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
            @php
                $testimonials = [
                    ['name' => 'Tiwari Pratik', 'quote' => 'Excellent service! The car was in perfect condition and the booking process was incredibly smooth. Will definitely rent again!', 'image' => '2.png', 'role' => 'Business Professional'],
                    ['name' => 'Pradip Khanal', 'quote' => 'Affordable and reliable service. The staff was very helpful and the car exceeded my expectations. Highly recommended!', 'image' => '2.png', 'role' => 'Travel Enthusiast'],
                    ['name' => 'Prabesh Acharya', 'quote' => 'Great selection of vehicles and excellent customer service. They made my trip memorable with their professional approach.', 'image' => '1.png', 'role' => 'Happy Customer'],
                ];
            @endphp

            @foreach ($testimonials as $index => $t)
            <div class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition duration-500 border border-gray-200 transform hover:-translate-y-2" style="animation: fadeInUp 1s ease-out {{ $index * 0.2 }}s backwards;">
                <!-- Quote Icon -->
                <div class="text-gradient-orange text-6xl mb-4 opacity-50">"</div>
                
                <!-- Testimonial Text -->
                <p class="text-gray-700 text-lg italic mb-6 leading-relaxed">{{ $t['quote'] }}</p>
                
                <!-- Rating -->
                <div class="flex gap-1 mb-6">
                    @for($i = 1; $i <= 5; $i++)
                        <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    @endfor
                </div>
                
                <!-- Customer Info -->
                <div class="flex items-center pt-6 border-t border-gray-200">
                    <div class="relative">
                        <img src="{{ asset($t['image']) }}" alt="{{ $t['name'] }}" class="w-16 h-16 rounded-full border-4 border-blue-200 object-cover">
                        <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-xl font-bold text-gray-900">{{ $t['name'] }}</h4>
                        <p class="text-blue-600 text-sm font-semibold">{{ $t['role'] }}</p>
                        <p class="text-gray-500 text-xs mt-1">📍 Kathmandu, Nepal</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Call to Action -->
        <div class="text-center mt-16">
            <p class="text-gray-700 text-xl mb-6 font-semibold">Join thousands of satisfied customers!</p>
            <a href="{{ route('Cars') }}" class="inline-block bg-gradient-to-r from-orange-500 via-red-500 to-pink-600 hover:from-orange-600 hover:via-red-600 hover:to-pink-700 text-white font-bold py-4 px-10 rounded-full text-lg shadow-xl transform hover:scale-105 transition duration-300">
                Start Your Journey Today 🚀
            </a>
        </div>
    </div>
</section>

@endsection
