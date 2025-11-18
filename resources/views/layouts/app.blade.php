<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .nav-link {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: white;
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }
        
        .nav-link:hover::before,
        .nav-link.active::before {
            transform: scaleY(1);
        }
        
        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }
        
        .nav-link.active {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), transparent);
        }
        
        .sidebar-gradient {
            background: linear-gradient(180deg, #1e3a8a 0%, #1e40af 50%, #3b82f6 100%);
        }
        
        .profile-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50">
    @include('layouts.alert')

    <div class="flex min-h-screen max-h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-72 sidebar-gradient shadow-2xl relative overflow-hidden flex-shrink-0">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-40 h-40 bg-blue-400 rounded-full filter blur-3xl opacity-20 -mr-20 -mt-20"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-indigo-400 rounded-full filter blur-3xl opacity-20 -ml-20 -mb-20"></div>
            
            <div class="relative z-10 h-full overflow-y-auto">
                <!-- Profile Section -->
                <div class="p-6 fade-in">
                    <div class="profile-card rounded-2xl p-6 text-center shadow-xl">
                        <div class="inline-block p-1 bg-white rounded-full shadow-lg mb-4">
                            <img src="{{ asset('1.png') }}" alt="Logo" class="w-20 h-20 rounded-full">
                        </div>
                        <h2 class="text-xl font-bold text-white mb-1">Arjun Bhusal</h2>
                        <p class="text-blue-200 text-sm">Administrator</p>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="px-4 pb-6 space-y-2">
                    <a href="{{route('dashboard')}}" class="nav-link active flex items-center gap-3 p-4 rounded-xl text-white font-semibold text-left">
                        <i class="ri-dashboard-3-line text-2xl"></i>
                        <span>Dashboard</span>
                    </a>
                    
                    <a href="{{ route('vehicle.index') }}" class="nav-link flex items-center gap-3 p-4 rounded-xl text-white font-semibold text-left">
                        <i class="ri-car-line text-2xl"></i>
                        <span>Vehicles</span>
                    </a>
                    
                    <a href="{{ route('bookings.index') }}" class="nav-link flex items-center gap-3 p-4 rounded-xl text-white font-semibold text-left">
                        <i class="ri-calendar-check-line text-2xl"></i>
                        <span>Bookings</span>
                    </a>
                    
                    <a href="{{ route('users.index') }}" class="nav-link flex items-center gap-3 p-4 rounded-xl text-white font-semibold text-left">
                        <i class="ri-user-line text-2xl"></i>
                        <span>Users</span>
                    </a>

                    <a href="{{ route('messages.index') }}" class="nav-link flex items-center gap-3 p-4 rounded-xl text-white font-semibold text-left">
                        <i class="ri-message-3-line text-2xl"></i>
                        <span>Messages</span>
                    </a>
                    
                    <a href="{{ route('reviews.index') }}" class="nav-link flex items-center gap-3 p-4 rounded-xl text-white font-semibold text-left">
                        <i class="ri-star-line text-2xl"></i>
                        <span>Reviews</span>
                    </a>
                    
                    <!-- Divider -->
                    <div class="border-t border-blue-400 opacity-30 my-4"></div>
                    
                    <!-- Logout -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link flex items-center gap-3 p-4 rounded-xl text-white font-semibold w-full text-left hover:bg-red-600 transition">
                            <i class="ri-logout-box-line text-2xl"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </nav>
            </div>
        </aside>

        <!-- Content Area -->
        <main class="flex-1 bg-gray-50 overflow-y-auto h-screen">
            <!-- Top Header -->
            <div class="bg-white shadow-sm border-b border-gray-200 px-8 py-6 sticky top-0 z-10">
                <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                    @yield('title')
                </h1>
            </div>
            
            <!-- Content -->
            <div class="p-8">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <script>
        // Add active class to current page
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.href;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.href === currentUrl) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
