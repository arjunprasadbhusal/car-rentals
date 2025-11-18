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
    
    .animate-slideInLeft {
        animation: slideInLeft 0.6s ease-out;
    }
    
    .animate-slideInRight {
        animation: slideInRight 0.6s ease-out;
    }
    
    .feature-item {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.7s ease-in-out;
    }
    
    .feature-item.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-20 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="animation-delay: 1s;"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">
            <!-- Left Column: Text Content -->
            <div class="space-y-6 animate-slideInLeft">
                <div class="inline-block">
                    <span class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                        🚗 About Rently
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                    We offer customers a wide range of 
                    <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">commercial cars</span> and 
                    <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">luxury cars</span> for any occasion.
                </h1>
                <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                    <p class="text-lg text-gray-700 leading-relaxed">
                        At <span class="font-bold text-blue-600">Rently</span>, we are dedicated to providing exceptional car rental 
                        services to our valued customers. With a commitment to quality, convenience,
                        and customer satisfaction, we strive to make every rental experience seamless and enjoyable.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-semibold">Quality Assured</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700 font-semibold">Best Prices</span>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex gap-4 pt-4">
                    <a href="{{ route('Cars') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-8 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 flex items-center gap-2">
                        View Our Fleet
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="{{ route('Contact') }}" class="bg-white text-gray-800 px-8 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 border-2 border-gray-200">
                        Contact Us
                    </a>
                </div>
            </div>

            <!-- Right Column: Hero Image -->
            <div class="animate-slideInRight relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-500">
                    <img src="{{ asset('image/1748706732.png') }}" 
                         alt="Premium Car Rental Service" 
                         class="w-full h-[500px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    
                    <!-- Floating Stats Badge -->
                    <div class="absolute bottom-6 left-6 right-6 grid grid-cols-2 gap-4">
                        <div class="bg-white/95 backdrop-blur-sm px-4 py-3 rounded-xl shadow-lg">
                            <p class="text-2xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">15+</p>
                            <p class="text-xs text-gray-600 font-semibold">Years Experience</p>
                        </div>
                        <div class="bg-white/95 backdrop-blur-sm px-4 py-3 rounded-xl shadow-lg">
                            <p class="text-2xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">235</p>
                            <p class="text-xs text-gray-600 font-semibold">Premium Vehicles</p>
                        </div>
                    </div>
                    
                    <!-- Quality Badge -->
                    <div class="absolute top-6 right-6 bg-gradient-to-br from-green-500 to-emerald-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Verified Quality
                    </div>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full opacity-20 blur-2xl"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full opacity-20 blur-2xl"></div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="text-center bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg border border-blue-200 transform hover:scale-105 transition animate-fadeInUp">
                <div class="bg-gradient-to-br from-blue-500 to-indigo-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h2 class="text-4xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">15,425</h2>
                <p class="text-gray-700 mt-2 font-bold">Completed Orders</p>
            </div>
            
            <div class="text-center bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl p-8 shadow-lg border border-indigo-200 transform hover:scale-105 transition animate-fadeInUp" style="animation-delay: 0.1s;">
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                    </svg>
                </div>
                <h2 class="text-4xl font-extrabold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">8,745</h2>
                <p class="text-gray-700 mt-2 font-bold">Happy Customers</p>
            </div>
            
            <div class="text-center bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 shadow-lg border border-purple-200 transform hover:scale-105 transition animate-fadeInUp" style="animation-delay: 0.2s;">
                <div class="bg-gradient-to-br from-purple-500 to-pink-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                        <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                    </svg>
                </div>
                <h2 class="text-4xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">235</h2>
                <p class="text-gray-700 mt-2 font-bold">Vehicles Fleet</p>
            </div>
            
            <div class="text-center bg-gradient-to-br from-pink-50 to-pink-100 rounded-2xl p-8 shadow-lg border border-pink-200 transform hover:scale-105 transition animate-fadeInUp" style="animation-delay: 0.3s;">
                <div class="bg-gradient-to-br from-pink-500 to-red-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h2 class="text-4xl font-extrabold bg-gradient-to-r from-pink-600 to-red-600 bg-clip-text text-transparent">15</h2>
                <p class="text-gray-700 mt-2 font-bold">Years Experience</p>
            </div>
        </div>
    </div>
</section>

<!-- Board of Directors Section -->
<section class="relative py-20 bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-0 w-72 h-72 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow" style="animation-delay: 1s;"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16 animate-fadeInUp">
            <div class="inline-block mb-4">
                <span class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                    👥 Leadership Team
                </span>
            </div>
            <h1 class="text-5xl font-extrabold text-white mb-4">
                Board of Directors
            </h1>
            <p class="text-blue-200 text-lg max-w-2xl mx-auto">
                Meet the passionate team driving innovation and excellence at Rently
            </p>
        </div>

        <!-- Member Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Member Card 1 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-2xl border border-white/20 transform hover:scale-105 transition duration-500 animate-fadeInUp group">
                <div class="relative overflow-hidden">
                    <img class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110" src="arjun.png" alt="Arjun Prasad Bhusal">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <!-- Social Media Links Overlay -->
                    <div class="absolute inset-x-0 top-4 flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <a href="https://instagram.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-blue-600 hover:scale-110 transition">
                            <i class="ri-instagram-fill text-xl"></i>
                        </a>
                        <a href="https://facebook.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-blue-600 hover:scale-110 transition">
                            <i class="ri-facebook-fill text-xl"></i>
                        </a>
                        <a href="https://whatsapp.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-green-600 hover:scale-110 transition">
                            <i class="ri-whatsapp-fill text-xl"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-white mb-2">Arjun Prasad Bhusal</h3>
                    <p class="text-blue-300 font-semibold">Chief Creative Officer</p>
                    <div class="mt-4 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-white text-sm">Verified Member</span>
                    </div>
                </div>
            </div>

            <!-- Member Card 2 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-2xl border border-white/20 transform hover:scale-105 transition duration-500 animate-fadeInUp group" style="animation-delay: 0.1s;">
                <div class="relative overflow-hidden">
                    <img class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110" src="manoj.png" alt="Manoj Neupane">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute inset-x-0 top-4 flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <a href="https://instagram.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-blue-600 hover:scale-110 transition">
                            <i class="ri-instagram-fill text-xl"></i>
                        </a>
                        <a href="https://facebook.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-blue-600 hover:scale-110 transition">
                            <i class="ri-facebook-fill text-xl"></i>
                        </a>
                        <a href="https://whatsapp.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-green-600 hover:scale-110 transition">
                            <i class="ri-whatsapp-fill text-xl"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-white mb-2">Manoj Neupane</h3>
                    <p class="text-blue-300 font-semibold">Chief Technology Officer</p>
                    <div class="mt-4 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-white text-sm">Verified Member</span>
                    </div>
                </div>
            </div>

            <!-- Member Card 3 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-2xl border border-white/20 transform hover:scale-105 transition duration-500 animate-fadeInUp group" style="animation-delay: 0.2s;">
                <div class="relative overflow-hidden">
                    <img class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110" src="pradip.png" alt="Pradip Khanal">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute inset-x-0 top-4 flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <a href="https://instagram.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-blue-600 hover:scale-110 transition">
                            <i class="ri-instagram-fill text-xl"></i>
                        </a>
                        <a href="https://facebook.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-blue-600 hover:scale-110 transition">
                            <i class="ri-facebook-fill text-xl"></i>
                        </a>
                        <a href="https://whatsapp.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-green-600 hover:scale-110 transition">
                            <i class="ri-whatsapp-fill text-xl"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-white mb-2">Pradip Khanal</h3>
                    <p class="text-blue-300 font-semibold">Chief Executive Officer</p>
                    <div class="mt-4 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-white text-sm">Verified Member</span>
                    </div>
                </div>
            </div>

            <!-- Member Card 4 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-2xl border border-white/20 transform hover:scale-105 transition duration-500 animate-fadeInUp group" style="animation-delay: 0.3s;">
                <div class="relative overflow-hidden">
                    <img class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110" src="prabesh.png" alt="Prabesh Aacharya">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute inset-x-0 top-4 flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <a href="https://instagram.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-blue-600 hover:scale-110 transition">
                            <i class="ri-instagram-fill text-xl"></i>
                        </a>
                        <a href="https://facebook.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-blue-600 hover:scale-110 transition">
                            <i class="ri-facebook-fill text-xl"></i>
                        </a>
                        <a href="https://whatsapp.com" class="bg-white/20 backdrop-blur-sm p-3 rounded-full text-white hover:bg-green-600 hover:scale-110 transition">
                            <i class="ri-whatsapp-fill text-xl"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-white mb-2">Prabesh Aacharya</h3>
                    <p class="text-blue-300 font-semibold">Chief Financial Officer</p>
                    <div class="mt-4 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-white text-sm">Verified Member</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Highlight Section -->
<section class="container mx-auto py-20 px-6">
    <div class="text-center mb-16 animate-fadeInUp">
        <div class="inline-block mb-4">
            <span class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                ✨ Our Features
            </span>
        </div>
        <h1 class="text-5xl font-extrabold bg-gradient-to-r from-gray-900 via-blue-900 to-indigo-900 bg-clip-text text-transparent">
            Features Highlight
        </h1>
        <p class="text-gray-600 text-lg mt-4">Excellence in every detail of our service</p>
    </div>
    
    <div class="flex flex-col lg:flex-row items-center justify-center gap-12">
        <!-- Left Section -->
        <div class="space-y-8 lg:w-1/3">
            <div class="feature-item flex items-start gap-6 bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition">
                <div class="bg-gradient-to-br from-green-400 to-emerald-500 text-white p-4 rounded-xl shadow-lg flex-shrink-0">
                    <i class="ri-trophy-fill text-3xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">First Class Services</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Where luxury meets exceptional care, creating unforgettable moments and exceeding your every expectation.
                    </p>
                </div>
            </div>
            
            <div class="feature-item flex items-start gap-6 bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition" style="transition-delay: 0.1s;">
                <div class="bg-gradient-to-br from-blue-400 to-indigo-500 text-white p-4 rounded-xl shadow-lg flex-shrink-0">
                    <i class="ri-road-fill text-3xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">24/7 Road Assistance</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Reliable support when you need it most, keeping you on the move with confidence and peace of mind.
                    </p>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <div class="feature-item lg:w-1/3 flex justify-center" style="transition-delay: 0.2s;">
            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-400 to-purple-400 rounded-3xl blur opacity-30 group-hover:opacity-50 transition"></div>
                <img src="likeit.png" alt="Car Image" class="relative w-full max-w-md shadow-2xl rounded-2xl transform group-hover:scale-105 transition duration-500">
            </div>
        </div>

        <!-- Right Section -->
        <div class="space-y-8 lg:w-1/3">
            <div class="feature-item flex items-start gap-6 bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition" style="transition-delay: 0.3s;">
                <div class="bg-gradient-to-br from-orange-400 to-red-500 text-white p-4 rounded-xl shadow-lg flex-shrink-0">
                    <i class="ri-tag-fill text-3xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Quality at Minimum Expense</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Unlocking affordable brilliance by elevating quality while minimizing costs for maximum value.
                    </p>
                </div>
            </div>
            
            <div class="feature-item flex items-start gap-6 bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition" style="transition-delay: 0.4s;">
                <div class="bg-gradient-to-br from-purple-400 to-pink-500 text-white p-4 rounded-xl shadow-lg flex-shrink-0">
                    <i class="ri-key-fill text-3xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Free Pick-Up & Drop-Off</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental experience.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="flex flex-col md:flex-row items-center bg-white shadow-lg ">
    <div class="md:w-1/2">
        <img src="arjun.png" alt="Happy Client" class="rounded-lg shadow-lg w-full">
    </div>
    <div class="md:w-1/2 text-center md:text-left mt-6 md:mt-0 p-12">
        <h1 class="text-4xl font-bold text-gray-800">Only Quality For Clients</h1>
        <div class="flex justify-center md:justify-start mt-4">
            <button class="px-4 py-2 bg-gray-300 text-white font-semibold rounded-lg mx-2 tab-button" data-tab="luxury">Luxury</button>
            <button class="px-4 py-2 bg-gray-300 text-white font-semibold rounded-lg mx-2 tab-button" data-tab="comfort">Comfort</button>
            <button class="px-4 py-2 bg-gray-300 text-white font-semibold rounded-lg mx-2 tab-button" data-tab="prestige">Prestige</button>
        </div>
        <div class="text-gray-600 mt-4 tab-content p-10 text-2xl ">
            <!-- Default content for Comfort -->
            <p>
                We prioritize your comfort and convenience throughout your journey. We understand that a comfortable ride can make a world of difference, whether you're embarking on a business trip or enjoying a leisurely vacation. That’s why we offer a wide range of well-maintained, comfortable cars that cater to your specific needs.
            </p>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="bg-green-500 text-white py-6 mt-6 text-center">
    <p class="text-lg">Call us for further information. Rentaly customer care is here to help you anytime.</p>
    <h2>CONTACT US NOW</h2>
    <i class="ri-phone-fill text-4xl"></i>
    <h2 class="text-3xl font-bold mt-2">1200 333 800</h2>
    <br>
    <a href="{{('contact')}} " class="mt-4 px-6 py-2 bg-white text-green-500 font-semibold rounded-lg">Contact Us</a>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.tab-button');
        const content = document.querySelector('.tab-content');

        // Content for each tab
        const tabContents = {
            luxury: `
                <p>
                    Indulge in the finest experience with our luxury cars. Designed for those who demand excellence, our fleet offers premium features and unparalleled comfort for your ultimate driving experience.
                </p>
            `,
            comfort: `
                <p>
                    We prioritize your comfort and convenience throughout your journey. We understand that a comfortable ride can make a world of difference, whether you're embarking on a business trip or enjoying a leisurely vacation. That’s why we offer a wide range of well-maintained, comfortable cars that cater to your specific needs.
                </p>
            `,
            prestige: `
                <p>
                    Prestige is not just a word—it's a lifestyle. Experience our top-tier vehicles that combine elegance and performance, making every journey a statement of sophistication and class.
                </p>
            `
        };

        // Add click event listeners to buttons
        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                // Update active button styling
                buttons.forEach((btn) => {
                    btn.classList.remove('bg-gradient-to-r', 'from-green-500', 'to-emerald-600', 'text-white', 'shadow-lg');
                    btn.classList.add('bg-gray-100', 'text-gray-700');
                });
                button.classList.remove('bg-gray-100', 'text-gray-700');
                button.classList.add('bg-gradient-to-r', 'from-green-500', 'to-emerald-600', 'text-white', 'shadow-lg');

                // Update content based on data-tab
                const tab = button.getAttribute('data-tab');
                content.innerHTML = tabContents[tab];
            });
        });
        
        // Intersection Observer for features
        const featureItems = document.querySelectorAll('.feature-item');
        const featureObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    featureObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        featureItems.forEach((item) => {
            featureObserver.observe(item);
        });
    });
</script>

@endsection






