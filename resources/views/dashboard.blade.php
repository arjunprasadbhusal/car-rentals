@extends('layouts.app')
@section('title')dashboard @endsection
@section('content')

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
    <div class="bg-gradient-to-r from-green-400 to-blue-500 p-6 rounded-lg shadow-lg transform transition-all hover:scale-105 hover:shadow-2xl">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-semibold text-white mb-2">users</h2>
            <i class="ri-user-line text-4xl text-white"></i>
        </div>
        <p class="text-white text-sm">Manage your user and details.</p>
        <a href="{{route('users.index')}}" class="mt-4 block px-4 py-2 bg-yellow-500 text-black font-bold rounded-full hover:bg-yellow-600 text-center transition-all">Manage users</a>
    </div>

    <!-- vehicle Card -->
    <div class="bg-gradient-to-r from-purple-400 to-pink-500 p-6 rounded-lg shadow-lg transform transition-all hover:scale-105 hover:shadow-2xl">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-semibold text-white mb-2">vehicle</h2>
            <i class="ri-car-line text-4xl text-white"></i>
        </div>
        <p class="text-white text-sm">Create and manage travel vehicle for customers.</p>
        <a href="{{ route('vehicle.index') }}" class="mt-4 block px-4 py-2 bg-yellow-500 text-black font-bold rounded-full hover:bg-yellow-600 text-center transition-all">Manage vehicle</a>
    </div>

    <!-- Bookings Card -->
    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 p-6 rounded-lg shadow-lg transform transition-all hover:scale-105 hover:shadow-2xl">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-semibold text-white mb-2">Bookings</h2>
            <i class="ri-book-line text-4xl text-white"></i>
        </div>
        <p class="text-white text-sm">View and manage customer bookings.</p>
        <a href="{{route('bookings.index')}}" class="mt-4 block px-4 py-2 bg-yellow-500 text-black font-bold rounded-full hover:bg-yellow-600 text-center transition-all">Manage Bookings</a>
    </div>

    <!-- Reviews Card -->
    <div class="bg-gradient-to-r from-red-400 to-pink-500 p-6 rounded-lg shadow-lg transform transition-all hover:scale-105 hover:shadow-2xl">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-semibold text-white mb-2">Reviews</h2>
            <i class="ri-star-line text-4xl text-white"></i>
        </div>
        <p class="text-white text-sm">Read and respond to customer reviews.</p>
        <a href="{{route('reviews.index')}}" class="mt-4 block px-4 py-2 bg-yellow-500 text-black font-bold rounded-full hover:bg-yellow-600 text-center transition-all">Manage Reviews</a>
    </div>

    
    
</div>
@endsection
