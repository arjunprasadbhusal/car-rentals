@extends('layouts.master')

@section('content')



<header class="relative">
    <img src="{{ asset('car.jpg') }}" alt="Background" class="w-full h-screen object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
        <div class="text-center text-white px-8 py-4">
            <h1 class="text-5xl font-bold mb-4">
                <span class="text-green-400">Our Cars</span>
            </h1>
            
        
        </div>
    </div>
</header>


<div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-10 md:px-20 sm:px-10 px-5 py-12">
    @foreach ($cars as $car)
    <div class="relative rounded-lg shadow-md p-4 bg-white transform hover:scale-105 hover:rotate-1 transition-transform duration-300 hover:shadow-2xl">

        <!-- Image -->
        <img src="{{ asset('image/' . $car->photopath) }}" 
             alt="Image of {{ $car->Name }}" 
             class="h-44 w-full object-cover rounded-t-lg">

        <!-- Vehicle Info -->
        <div class="p-4">
            <h1 class="text-xl font-bold text-gray-800 mt-2">{{ $car->Name }}</h1>
            
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
               title="{{ $car->description }}">{{ $car->description }}</p>
        </div>

        <!-- Price and Button -->
        <div class="flex justify-between items-center mt-3 px-4">
            <div>
                <h1 class="text-xl font-extrabold text-green-700">Rs. {{ $car->Price_Per_Day }}</h1>
                @if($car->is_available)
                <span class="text-xs text-green-600 font-semibold">Available</span>
                @else
                <span class="text-xs text-red-600 font-semibold">Out of Stock</span>
                @endif
            </div>
            <a href="{{ route('viewvehicle', $car->id) }}"
               class="relative bg-gradient-to-r from-blue-600 to-purple-500 text-white px-4 py-2 rounded-lg text-sm hover:from-blue-500 hover:to-purple-400 transition group overflow-hidden">
                <span class="absolute inset-0 bg-white opacity-10 group-hover:opacity-20 transition"></span>
                View Product
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection
