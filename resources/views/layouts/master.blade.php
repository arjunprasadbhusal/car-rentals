<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8d7xj1z5l5e5c5e5c5e5c5e5c5e5c5e5c5e" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8d7xj1z5l5e5c5e5e5c5e5c5e5c5e5c5e" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8d7xj1z5l5e5c5e5e5c5e5c5e5c5e5c5e" crossorigin="anonymous" />
    <title>Rently - Premium Car Rental</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-slideDown {
            animation: slideDown 0.3s ease-out;
        }
        
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(to right, #3B82F6, #8B5CF6);
            transition: width 0.3s ease;
            border-radius: 2px;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .nav-link.active::after {
            width: 100%;
        }
        
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        
        .marquee-text {
            animation: marquee 20s linear infinite;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    @include('layouts.alert')
    
    <!-- Top Info Bar -->
    <div class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white py-2 px-6">
        <div class="container mx-auto flex justify-between items-center text-sm">
            <div class="flex items-center space-x-6">
                <a href="tel:2345678976" class="flex items-center space-x-2 hover:text-blue-200 transition">
                    <i class="ri-phone-fill"></i>
                    <span class="font-semibold">+234 567 8976</span>
                </a>
                <div class="flex items-center space-x-3">
                    <a href="https://instagram.com" class="hover:text-blue-200 transition transform hover:scale-110"><i class="ri-instagram-fill text-lg"></i></a>
                    <a href="https://facebook.com" class="hover:text-blue-200 transition transform hover:scale-110"><i class="ri-facebook-fill text-lg"></i></a>
                    <a href="https://whatsapp.com" class="hover:text-blue-200 transition transform hover:scale-110"><i class="ri-whatsapp-fill text-lg"></i></a>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                @auth 
                <span class="flex items-center gap-2">
                    <i class="ri-user-smile-fill"></i>
                    <span class="font-semibold">Hi, {{ auth()->user()->name }}</span>
                </span>
                <span class="relative">
                    <a href="{{ route('mybookmark') }}" class="flex items-center gap-1 hover:text-blue-200 transition font-semibold">
                        <i class="ri-bookmark-fill"></i>
                        <span>Bookmarks</span>
                    </a>
                    <span class="absolute -top-2 -right-3 w-5 h-5 text-xs flex items-center justify-center bg-red-500 text-white rounded-full font-bold shadow-lg">
                        @php
                            $no_of_items = \App\Models\bookmark::where('user_id',auth()->id())->Count();
                        @endphp
                        {{$no_of_items}}
                    </span>
                </span>
                <form action="{{ route('logout') }}" method="post" class="inline">
                    @csrf 
                    <button type="submit" class="hover:text-blue-200 transition font-semibold flex items-center gap-1">
                        <i class="ri-logout-box-line"></i>
                        <span>Logout</span>
                    </button>
                </form>
                @else
                <a href="/login" class="bg-white text-blue-600 px-4 py-1.5 rounded-lg hover:bg-blue-50 transition font-bold flex items-center gap-1 shadow-lg">
                    <i class="ri-login-box-line"></i>
                    <span>Login</span>
                </a> 
                @endauth
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50 border-b border-gray-200">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="relative">
                        <img src="{{ asset('1.png') }}" alt="Logo" class="h-14 transform group-hover:scale-110 transition duration-300">
                        <div class="absolute inset-0 bg-blue-400 rounded-full blur-xl opacity-0 group-hover:opacity-30 transition duration-300"></div>
                    </div>
                    <div>
                        <span class="text-2xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Rently</span>
                        <p class="text-xs text-gray-500 font-semibold">Premium Car Rental</p>
                    </div>
                </a>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link text-gray-700 hover:text-blue-600 font-semibold text-base">Home</a>
                    <a href="{{ route('Cars') }}" class="nav-link text-gray-700 hover:text-blue-600 font-semibold text-base">Cars</a>
                    <a href="{{ route('About') }}" class="nav-link text-gray-700 hover:text-blue-600 font-semibold text-base">About Us</a>
                    <a href="{{ route('Contact') }}" class="nav-link text-gray-700 hover:text-blue-600 font-semibold text-base">Contact</a>
                </div>
                
                <!-- Search & Profile -->
                <div class="hidden lg:flex items-center space-x-4">
                    <form action="{{route('search')}}" method="get" class="flex items-center">
                        <div class="relative">
                            <input type="search" placeholder="Search vehicles..." 
                                   class="pl-10 pr-4 py-2 border-2 border-gray-200 rounded-l-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition w-64" 
                                   name="qry" value="{{request()->qry}}" minlength="2" required>
                            <i class="ri-search-line absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                        <button type="submit" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-2 rounded-r-xl hover:from-blue-700 hover:to-indigo-700 transition font-bold shadow-lg flex items-center gap-2">
                            <i class="ri-search-2-line"></i>
                            Search
                        </button>
                    </form>
                    
                    @auth
                    <a href="{{ route('userprofile.edit') }}" class="block relative group">
                        <img src="{{ asset('avatar.png') }}" alt="User Avatar" class="w-12 h-12 rounded-full shadow-lg border-2 border-blue-200 group-hover:border-blue-500 transition">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></div>
                    </a>
                    @endauth
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button id="menu-toggle" class="text-gray-800 p-2 hover:bg-gray-100 rounded-lg transition">
                        <i class="ri-menu-3-line text-3xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-xl border-t border-gray-200 animate-slideDown">
        <div class="container mx-auto px-6 py-6 space-y-4">
            <a href="{{ route('home') }}" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 p-3 rounded-lg transition font-semibold">
                <i class="ri-home-4-line text-xl"></i>
                <span>Home</span>
            </a>
            <a href="{{ route('Cars') }}" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 p-3 rounded-lg transition font-semibold">
                <i class="ri-car-line text-xl"></i>
                <span>Cars</span>
            </a>
            <a href="{{ route('About') }}" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 p-3 rounded-lg transition font-semibold">
                <i class="ri-information-line text-xl"></i>
                <span>About Us</span>
            </a>
            <a href="{{ route('Contact') }}" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 p-3 rounded-lg transition font-semibold">
                <i class="ri-phone-line text-xl"></i>
                <span>Contact</span>
            </a>
            
            <!-- Mobile Search -->
            <form action="{{route('search')}}" method="get" class="pt-4 border-t border-gray-200">
                <div class="relative">
                    <input type="search" placeholder="Search vehicles..." 
                           class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" 
                           name="qry" value="{{request()->qry}}" minlength="2" required>
                    <i class="ri-search-line absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                <button type="submit" class="w-full mt-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 rounded-xl hover:from-blue-700 hover:to-indigo-700 transition font-bold shadow-lg">
                    Search Now
                </button>
            </form>
            
            @guest
            <a href="/login" class="block text-center bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-xl hover:from-blue-700 hover:to-indigo-700 transition font-bold shadow-lg mt-4">
                Login
            </a>
            @endguest
        </div>
    </div>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white pt-16 pb-8 mt-20">
        <div class="container mx-auto px-6">
            <!-- Main Footer Content -->
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('1.png') }}" alt="Logo" class="h-12">
                        <div>
                            <h3 class="text-2xl font-extrabold bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent">Rently</h3>
                            <p class="text-xs text-gray-400">Premium Car Rental</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Your trusted partner for premium car rental services. Experience comfort, quality, and reliability on every journey.
                    </p>
                    <div class="flex space-x-3 pt-2">
                        <a href="https://instagram.com" class="w-10 h-10 bg-gradient-to-br from-pink-500 to-purple-600 rounded-lg flex items-center justify-center hover:scale-110 transition transform shadow-lg">
                            <i class="ri-instagram-fill text-lg"></i>
                        </a>
                        <a href="https://facebook.com" class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-700 rounded-lg flex items-center justify-center hover:scale-110 transition transform shadow-lg">
                            <i class="ri-facebook-fill text-lg"></i>
                        </a>
                        <a href="https://whatsapp.com" class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-700 rounded-lg flex items-center justify-center hover:scale-110 transition transform shadow-lg">
                            <i class="ri-whatsapp-fill text-lg"></i>
                        </a>
                        <a href="https://twitter.com" class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg flex items-center justify-center hover:scale-110 transition transform shadow-lg">
                            <i class="ri-twitter-fill text-lg"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white relative inline-block">
                        Quick Links
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full"></span>
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group">
                            <i class="ri-arrow-right-s-line group-hover:translate-x-1 transition"></i> Home
                        </a></li>
                        <li><a href="{{ route('Cars') }}" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group">
                            <i class="ri-arrow-right-s-line group-hover:translate-x-1 transition"></i> Our Fleet
                        </a></li>
                        <li><a href="{{ route('About') }}" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group">
                            <i class="ri-arrow-right-s-line group-hover:translate-x-1 transition"></i> About Us
                        </a></li>
                        <li><a href="{{ route('Contact') }}" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group">
                            <i class="ri-arrow-right-s-line group-hover:translate-x-1 transition"></i> Contact
                        </a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white relative inline-block">
                        Our Services
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full"></span>
                    </h4>
                    <ul class="space-y-3">
                        <li class="text-gray-400 flex items-center gap-2">
                            <i class="ri-check-line text-green-500"></i> Daily Rentals
                        </li>
                        <li class="text-gray-400 flex items-center gap-2">
                            <i class="ri-check-line text-green-500"></i> Weekly Rentals
                        </li>
                        <li class="text-gray-400 flex items-center gap-2">
                            <i class="ri-check-line text-green-500"></i> Monthly Rentals
                        </li>
                        <li class="text-gray-400 flex items-center gap-2">
                            <i class="ri-check-line text-green-500"></i> Airport Transfer
                        </li>
                        <li class="text-gray-400 flex items-center gap-2">
                            <i class="ri-check-line text-green-500"></i> Wedding Events
                        </li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white relative inline-block">
                        Contact Us
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full"></span>
                    </h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-gray-400">
                            <i class="ri-map-pin-fill text-blue-500 text-xl flex-shrink-0 mt-1"></i>
                            <span>123, Chitwan<br>Nepal</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-400">
                            <i class="ri-phone-fill text-green-500 text-xl"></i>
                            <a href="tel:2345678976" class="hover:text-blue-400 transition">+234 567 8976</a>
                        </li>
                        <li class="flex items-center gap-3 text-gray-400">
                            <i class="ri-mail-fill text-red-500 text-xl"></i>
                            <a href="mailto:contact@rentaly.com" class="hover:text-blue-400 transition">contact@rentaly.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Divider -->
            <div class="border-t border-gray-700 pt-8 mt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-gray-400 text-sm">
                        &copy; {{ date('Y') }} <span class="font-bold text-white">Rently</span>. All rights reserved.
                    </p>
                    <div class="flex items-center gap-6 text-sm">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition">Privacy Policy</a>
                        <span class="text-gray-600">|</span>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition">Terms of Service</a>
                        <span class="text-gray-600">|</span>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition">Cookie Policy</a>
                    </div>
                </div>
                
                <!-- Marquee Quote -->
                <div class="mt-6 overflow-hidden bg-gradient-to-r from-blue-900/20 to-purple-900/20 rounded-lg py-3 px-4">
                    <p class="text-center text-gray-300 text-sm italic">
                        <i class="ri-double-quotes-l text-blue-400"></i>
                        "In every journey, a car rental is the vehicle of freedom."
                        <i class="ri-double-quotes-r text-blue-400"></i>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Navbar Toggle -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!menuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
        
        // Active link highlighting
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath || 
                (currentPath !== '/' && link.getAttribute('href') !== '/' && currentPath.includes(link.getAttribute('href')))) {
                link.classList.add('active', 'text-blue-600');
            }
        });
    </script>

</body>
</html>