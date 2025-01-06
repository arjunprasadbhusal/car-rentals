@extends('layouts.master')
@section('content')
<h1 class="text-blue-800 text-4xl text-center font-extrabold mt-10">Search vehicle-{{$qry}}</h1>

<div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-10 md:px-20 sm:px-10 px-5 py-12">
    @forelse ($vehicles as $vehicle)
    <div class="relative rounded-lg shadow-md p-4 bg-white transform hover:scale-105 hover:rotate-1 transition-transform duration-300 hover:shadow-2xl">

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
                View Product
            </a>
        </div>
    </div>
    @empty
    <h1 class="text-blue-500 text-4xl text-center font-bold mt-10 col-span-4">No Vehicle Found</h1>
    @endforelse
</div>
@endsection