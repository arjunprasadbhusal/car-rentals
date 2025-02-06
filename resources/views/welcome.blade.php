@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<header class="relative">
    <img src="{{ asset('hello.png') }}" alt="Background" class="w-full h-screen object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
        <div class="text-center text-white px-8 py-4">
            <h1 class="text-5xl font-bold mb-4">
                Looking for a <span class="text-green-400">vehicle?</span>
            </h1>
            <p class="text-2xl mb-8">You're at the right place.</p>
        
        </div>
    </div>
</header>

<!-- Popular Cars Section -->
<h1 class="text-blue-800 text-4xl text-center font-extrabold mt-10">Our Cars</h1>

<div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-10 md:px-20 sm:px-10 px-5 py-12 ">
    
    @foreach ($vehicles as $vehicle)

    
    <div class="relative rounded-lg shadow-md p-4  bg-gradient-to-br from-white to-orange-400  transform hover:scale-105 hover:rotate-1 transition-transform duration-300 hover:shadow-2xl">

        <!-- Ribbon for Hot Deal or New -->
        @if($vehicle->is_new)
        <div class="absolute top-2 left-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-lg">New</div>
        @endif
        @if($vehicle->is_hot_deal)
        <div class="absolute top-2 right-2 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded-lg">Hot Deal</div>
        @endif

        <!-- Image -->
        <img src="{{ asset('image/'.$vehicle->photopath) }}" 
             alt="Image of {{ $vehicle->Name }}" 
             class="h-44 w-full object-cover rounded-t-lg">

        <!-- Vehicle Info -->
        <div class="p-4">
            <h1 class="text-xl font-bold text-gray-800 mt-2">Name:{{ $vehicle->Name }}</h1>
            <h1 class="text-xl font-bold text-gray-800 mt-2">Type:{{ $vehicle->type }}</h1>
            
            <!-- Star Rating -->
            <div class="flex items-center mt-1 text-yellow-500">
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-line"></i> <!-- Half or empty star -->
            </div>
            
            <!-- Tooltip Description -->
            <p class="text-gray-500 text-sm mt-2 line-clamp-3" 
               title="{{ $vehicle->description }}">{{ $vehicle->description }}</p>
        </div>

        <!-- Price and Button -->
        <div class="flex justify-between items-center mt-3 px-4">
            <div>
                <h1 class="text-xl font-extrabold text-green-700">Price:Rs. {{ $vehicle->Price_Per_Day }}</h1>
                @if($vehicle->is_available)
                <span class="text-xs text-green-600 font-semibold">Available</span>
                
                @endif
            </div>
            <a href="{{route('viewvehicle',$vehicle->id)}}"
               class="relative bg-gradient-to-r from-blue-600 to-purple-500 text-white px-4 py-2 rounded-lg text-sm hover:from-blue-500 hover:to-purple-400 transition group overflow-hidden">
                <span class="absolute inset-0 bg-white opacity-10 group-hover:opacity-20 transition"></span>
                View Details
            </a>
        </div>
    </div>
    @endforeach
</div>


<!-- Testimonials Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">What Our Customers Say</h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg shadow-lg">
                <p class="text-gray-700 italic mb-4">"Excellent service! The car was in perfect condition."</p>
                <div class="flex items-center">
                    <img src="{{ asset('th(1).jpg') }}" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="text-lg font-bold">John Doe</h4>
                        <p class="text-gray-600">Location</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-lg">
                <p class="text-gray-700 italic mb-4">"Affordable and reliable, highly recommended."</p>
                <div class="flex items-center">
                    <img src="{{ asset('2.png') }}" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="text-lg font-bold">Jane Smith</h4>
                        <p class="text-gray-600">Location</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-lg">
                <p class="text-gray-700 italic mb-4">"Great selection of vehicles and excellent customer service."</p>
                <div class="flex items-center">
                    <img src="{{ asset('1.png') }}" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="text-lg font-bold">Alice Brown</h4>
                        <p class="text-gray-600">Location</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
