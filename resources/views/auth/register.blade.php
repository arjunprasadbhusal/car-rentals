@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Rently</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
</head>
<header class="h-screen w-88 bg-cover mt-0 relative bg-center" style="background-image: url('{{ asset('jersey.jpg') }}');">
    <main class="container mx-auto py-12">
        <!-- Overlay for darker background -->
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>

        <!-- Centered Transparent Form -->
        <div class="relative flex items-center justify-center w-full h-full">
            <div class="bg-white bg-opacity-30 backdrop-blur-lg rounded-lg shadow-md p-6 w-full max-w-4xl text-gray-900">
                <!-- Title -->
                <h2 class="text-2xl font-extrabold text-center text-white mb-4">
                    <i class="ri-user-add-line"></i> Register to <span class="text-red-600">Rently</span>
                </h2>

                <!-- Registration Form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                    @csrf

                    <!-- Left Column (Name, Email, Phone) -->
                    <div class="space-y-4">
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" class="block text-sm font-semibold text-white" />
                            <x-text-input id="name" class="block  w-full mt-1 p-3 rounded-lg border-none bg-white  text-black placeholder-gray-300 focus:ring-2 focus:ring-yellow-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-400 text-sm" />
                        </div>

                        <!-- Email -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" class="block text-sm font-semibold text-white" />
                            <x-text-input id="email" class="block w-full mt-1 p-3 rounded-lg border-none bg-white  text-black placeholder-gray-300 focus:ring-2 focus:ring-yellow-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-400 text-sm" />
                        </div>

                        <!-- Phone -->
                        <div>
                            <x-input-label for="phone" :value="__('Phone Number')" class="block text-sm font-semibold text-white" />
                            <x-text-input id="phone" class="block w-full mt-1 p-3 rounded-lg border-none bg-white  text-black placeholder-gray-300 focus:ring-2 focus:ring-yellow-500" type="tel" name="phone" :value="old('phone')" required autocomplete="tel" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-1 text-red-400 text-sm" />
                        </div>
                    </div>

                    <!-- Right Column (Address, Password, Confirm Password) -->
                    <div class="space-y-4">
                        <!-- Address -->
                        <div>
                            <x-input-label for="address" :value="__('Address')" class="block text-sm font-semibold text-white" />
                            <x-text-input id="address" name="address" class="block w-full mt-1 p-3 rounded-lg border-none bg-white  text-black placeholder-gray-300 focus:ring-2 focus:ring-yellow-500" />
                            <x-input-error :messages="$errors->get('address')" class="mt-1 text-red-400 text-sm" />
                        </div>

                        <!-- Password -->
                        <div>
                            <x-input-label for="password" :value="__('Password')" class="block text-sm font-semibold text-white" />
                            <x-text-input id="password" class="block w-full mt-1 p-3 rounded-lg border-none bg-white  text-black placeholder-gray-300 focus:ring-2 focus:ring-yellow-500" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-400 text-sm" />
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-semibold text-white" />
                            <x-text-input id="password_confirmation" class="block w-full mt-1 p-3 rounded-lg border-none bg-white  text-black placeholder-gray-300 focus:ring-2 focus:ring-yellow-500" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-red-400 text-sm" />
                        </div>
                    </div>

                    <!-- Submit Button (Centered) -->
                    <div class=" text-center justify-center mt-4 ">
                        <button type="submit" class=" mx-auto block w-full bg-yellow-500 text-black text-lg font-semibold py-3 rounded-lg shadow-md hover:bg-yellow-300 transition">
                            <i class="ri-arrow-right-line"></i> Register
                        </button>
                    </div>
                </form>

                <!-- Links -->
                <div class="mt-4 text-center text-sm">
                    <p class="text-white font-semibold">
                        Already registered?
                         <a href="{{ route('login') }}" class="text-gray-900 font-extrabold hover:underline">
                            Login Here <i class="ri-login-circle-line"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </main>
</header>
</html>
@endsection