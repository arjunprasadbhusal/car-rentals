<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Rentaly</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

    @include('layouts.alert')
    <!-- Top Navbar -->
    <nav class="flex justify-between items-center px-6 py-3 bg-black text-white sticky top-0 z-50">
        <div class="flex items-center space-x-6">
            <a href="tel:2345678976" class="flex items-center space-x-1">
                <i class="ri-phone-fill"></i>
                <span>+234 567 8976</span>
            </a>
            <a href="https://instagram.com" class="hover:text-gray-400"><i class="ri-instagram-fill"></i></a>
            <a href="https://facebook.com" class="hover:text-gray-400"><i class="ri-facebook-fill"></i></a>
            <a href="https://whatsapp.com" class="hover:text-gray-400"><i class="ri-whatsapp-fill"></i></a>
        </div>
        <div>
            @auth 
            <a href="">Hi, {{ auth()->user()->name }}</a>
            <span class="relative">
                    <a href="{{ route('mybookmark') }}" class="p-2 text-white font-bold"><i class="ri-shopping-bookmark-fill"></i>My
                        Bookmark</a>
                        <span class="absolute top-[-8px] right-[-6px] w-5 h-5 text-xs flex items-center justify-center bg-red-600 text-white rounded-full px-0.5">
                            @auth
                                @php
                                    $no_of_items = \App\Models\bookmark::where('user_id',auth()->id())->Count();
                                @endphp
                                {{$no_of_items}}
                                @else
                                0
                            @endauth
                        </span>
                    </span>
            <form action="{{ route('logout') }}" method="post" class="inline">
                @csrf 
                <button type="submit" class="p-2">Logout</button>
            </form>
            @else
            <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">Login</a> 
            @endauth
        </div>
    </nav>

    <!-- Main Navbar -->
    <nav class="flex justify-between items-center px-6 py-4 bg-white shadow-md sticky top-0 z-50">
        <div class="flex items-center">
            <img src="{{ asset('1.png') }}" alt="Logo" class="h-12">
            <span class="ml-3 text-xl font-bold text-gray-800">Rentaly</span>
        </div>
        <div class="hidden md:flex items-center space-x-6">
            <a href="{{ route('home') }}" class="hover:text-gray-600 transition">Home</a>
            <a href="{{ route('Cars') }}" class="hover:text-gray-600 transition">Cars</a>

            <a href="{{ route('About') }}" class="hover:text-gray-600 transition">About Us</a>
            <a href="{{ route('Contact') }}" class="hover:text-gray-600 transition">Contact Us</a>
            
        </div>
        
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-800">
                <i class="ri-menu-3-line text-2xl"></i>
            </button>
        </div>
        <form action="{{route('search')}}" method="get">
            <input type="search" placeholder="Search" class="p-2 border rounded-lg" name="qry" value="{{request()->qry}}" minlength="2" required>
            <button type="submit" class="p-2 bg-blue-500 text-white rounded-lg">Search</button>
        </form>
        @auth
            <a href="{{ route('userprofile.edit') }}" class="block w-10 h-10">
                <img src="{{ asset('avatar.png') }}" alt="User Avatar" class="w-10 h-10 rounded-full shadow-lg">
            </a>
            @endauth
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-white shadow-md">
        <div class="flex flex-col px-6 py-4 space-y-4">
            <a href="{{ route('home') }}" class="hover:text-gray-600">Home</a>
            <a href="{{ route('Cars') }}" class="hover:text-gray-600">Cars</a>
            <a href="{{ route('About') }}" class="hover:text-gray-600">About Us</a>
            <a href="{{ route('Contact') }}" class="hover:text-gray-600">Contact Us</a>
            <a href="#" class="hover:text-gray-600">News</a>
            <a href="#" class="hover:text-gray-600">Elements</a>
            <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">Login</a>
        </div>
    </div>

    <!-- Page Content -->
    <main class="mt-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-6 mt-10 overflow-hidden">
        <div class="container mx-auto">
            <p id="footer-text" class="whitespace-nowrap inline-block">&copy; {{ date('Y') }} “In every journey, a car rental is the vehicle of freedom.”</p>
        </div>
    </footer>

    <!-- JavaScript for Navbar Toggle -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <!-- JavaScript for Footer Animation -->
    <script>
        const footerText = document.getElementById('footer-text');
        let position = -footerText.offsetWidth; // Start from off-screen to the left

        function moveFooterText() {
            position += 2; // Adjust speed by changing the increment value
            if (position > window.innerWidth) {
                position = -footerText.offsetWidth; // Reset to off-screen once it exits the view
            }
            footerText.style.transform = `translateX(${position}px)`;
            requestAnimationFrame(moveFooterText);
        }

        // Initialize animation
        footerText.style.position = 'relative';
        moveFooterText();
    </script>

</body>
</html>
