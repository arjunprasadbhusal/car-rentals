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
</head>

<body class="font-sans antialiased bg-gray-100">
    @include('layouts.alert')

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-56 h-screen sticky top-0 bg-gradient-to-b from-blue-500 to-blue-800 text-white shadow-lg">
            <div class="text-center py-8">
                <img src="1.png" alt="Logo" class="w-8/12 mx-auto bg-white p-2 rounded-full shadow-lg">
                <h2 class="text-xl font-bold mt-4">Arjun Bhusal</h2>
            </div>
            <nav class="mt-8">
                <a href="{{route('dashboard')}}" class="block p-3 hover:bg-blue-700 rounded text-white">
                    <i class="ri-dashboard-line"></i> Dashboard
                </a>
                <a href="{{ route('vehicle.index') }}" class="block p-3 hover:bg-blue-700 rounded text-white">
                    <i class="ri-car-line"></i> Vehicle
                </a>
                <a href="{{ route('bookings.index') }}" class="block p-3 hover:bg-blue-700 rounded text-white">
                    <i class="ri-calendar-check-line"></i> Booking
                </a>
                
                <a href="{{ route('users.index') }}" class="block p-3 hover:bg-blue-700 rounded text-white">
                    <i class="ri-user-line"></i> User
                </a>

                <a href="{{ route('messages.index') }}" class="block p-3 hover:bg-blue-700 rounded text-white">
                    <i class="ri-message-line"></i> Messages
                </a>
                <a href="{{ route('reviews.index') }}" class="block p-3 hover:bg-blue-700 rounded text-white">
                <i class="ri-star-line "></i> reviews
                </a>
                <!-- Logout -->
                <form action="{{ route('logout') }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" class="block w-full p-3 text-left hover:bg-blue-700 rounded text-white">
                        <i class="ri-logout-box-line"></i> Logout
                    </button>
                </form>
            </nav>
        </div>

        <!-- Content Area -->
        <div class="p-6 flex-1 bg-white">
            <h1 class="text-3xl font-bold text-blue-800">@yield('title')</h1>
            <hr class="border-blue-500 my-4">
            <div class="bg-gray-50 p-6 rounded-lg shadow">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
