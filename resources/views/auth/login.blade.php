<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rently Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
        
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
            animation: fadeInUp 0.8s ease-out;
        }
        
        .animate-slideInRight {
            animation: slideInRight 0.8s ease-out;
        }
        
        .animate-pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }
        
        .bg-pattern {
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
        }
        
        .bg-white-20 {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .bg-white-10 {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-gradient {
            background: linear-gradient(135deg, #2563eb 0%, #4f46e5 50%, #7c3aed 100%);
        }
    </style>
</head>
<body class="bg-gray-50">

<div class="min-h-screen flex">
    <!-- Left Side - Branding & Info -->
    <div class="hidden lg:flex lg:w-1/2 sidebar-gradient relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="relative z-10 flex flex-col justify-center items-center w-full p-12 text-white">
            <div class="animate-fadeInUp">
                <!-- Logo -->
                <div class="flex items-center justify-center mb-8">
                    <div class="bg-white-20 p-4 rounded-3xl shadow-2xl">
                        <img src="{{ asset('1.png') }}" alt="Logo" class="h-20 w-20">
                    </div>
                </div>
                
                <h1 class="text-5xl font-extrabold mb-6 text-center">Welcome to Rently</h1>
                <p class="text-xl text-blue-100 text-center mb-12 max-w-md">
                    Your trusted partner for premium car rental services. Experience comfort and quality on every journey.
                </p>
                
                <!-- Features -->
                <div class="space-y-6 max-w-md">
                    <div class="flex items-center gap-4 bg-white-10 rounded-2xl p-4">
                        <div class="bg-white-20 w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="ri-car-line text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Premium Fleet</h3>
                            <p class="text-blue-100 text-sm">Wide range of luxury vehicles</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-4 bg-white-10 rounded-2xl p-4">
                        <div class="bg-white-20 w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="ri-shield-check-line text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Verified Quality</h3>
                            <p class="text-blue-100 text-sm">All vehicles fully inspected</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-4 bg-white-10 rounded-2xl p-4">
                        <div class="bg-white-20 w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="ri-24-hours-line text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">24/7 Support</h3>
                            <p class="text-blue-100 text-sm">We're here whenever you need</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Right Side - Login Form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-pattern">
        <div class="w-full max-w-md animate-slideInRight">
            <!-- Back to Home -->
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-blue-600 transition mb-8 group">
                <i class="ri-arrow-left-line text-xl group-hover:-translate-x-1 transition"></i>
                <span class="font-semibold">Back to Home</span>
            </a>
            
            <!-- Login Card -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-10 border border-gray-100">
                <div class="mb-8">
                    <h2 class="text-4xl font-extrabold text-gray-900 mb-3">Login</h2>
                    <p class="text-gray-600">Welcome back! Please enter your credentials to continue.</p>
                </div>
                
                <form action="{{route('login')}}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="ri-mail-line text-gray-400 text-xl"></i>
                            </div>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}"
                                   placeholder="john@example.com"
                                   class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition @error('email') border-red-500 @enderror"
                                   required>
                        </div>
                        @error('email')
                        <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                            <i class="ri-error-warning-line"></i>
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-bold text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="ri-lock-line text-gray-400 text-xl"></i>
                            </div>
                            <input type="password" 
                                   id="password" 
                                   name="password" 
                                   placeholder="••••••••"
                                   class="w-full pl-12 pr-12 py-3 border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 transition @error('password') border-red-500 @enderror"
                                   required>
                            <button type="button" 
                                    onclick="togglePassword()"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600">
                                <i class="ri-eye-line text-xl" id="toggleIcon"></i>
                            </button>
                        </div>
                        @error('password')
                        <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                            <i class="ri-error-warning-line"></i>
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                        <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700 transition">
                            Forgot Password?
                        </a>
                    </div>
                    
                    <!-- Login Button -->
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 flex items-center justify-center gap-2">
                        <i class="ri-login-box-line text-xl"></i>
                        Login to Account
                    </button>
                </form>
                
                <!-- Divider -->
                <div class="relative my-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-500 font-semibold">Or continue with</span>
                    </div>
                </div>
                
                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-4">
                    <button class="flex items-center justify-center gap-2 bg-white border-2 border-gray-200 hover:border-gray-300 hover:bg-gray-50 text-gray-700 font-semibold py-3 px-4 rounded-xl transition">
                        <svg class="w-5 h-5" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Google
                    </button>
                    <button class="flex items-center justify-center gap-2 bg-white border-2 border-gray-200 hover:border-gray-300 hover:bg-gray-50 text-gray-700 font-semibold py-3 px-4 rounded-xl transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        Facebook
                    </button>
                </div>
                
                <!-- Register Link -->
                <p class="mt-8 text-center text-gray-600">
                    Don't have an account? 
                    <a href="{{route('register')}}" class="font-bold text-blue-600 hover:text-blue-700 transition">
                        Create Account
                    </a>
                </p>
            </div>
            
            <!-- Footer Note -->
            <p class="text-center text-sm text-gray-500 mt-6">
                By logging in, you agree to our 
                <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> and 
                <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
            </p>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('ri-eye-line');
            toggleIcon.classList.add('ri-eye-off-line');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('ri-eye-off-line');
            toggleIcon.classList.add('ri-eye-line');
        }
    }
</script>

</body>
</html>