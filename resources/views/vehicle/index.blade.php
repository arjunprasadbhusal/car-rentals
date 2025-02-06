@extends('layouts.app')

@section('title', 'Our Cars')

@section('content')
<div class="container mx-auto mt-10">
    <!-- Title Section -->
    <div class="text-center mb-10">
        <h1 class="text-6xl font-extrabold text-gray-800">Our Cars</h1>
        <p class="text-lg text-gray-600 mt-2">Explore and manage all available vehicles for rent.</p>
        <a href="{{ route('vehicle.create') }}" class="mt-5 inline-block bg-indigo-800 text-white py-3 px-5 rounded-lg shadow-lg hover:bg-indigo-700">
            Add Vehicle
        </a>
    </div>

    <!-- Vehicle Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach($vehicles as $vehicle)
        <div class="bg-gradient-to-br from-white to-pink-600 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-transform transform hover:scale-105">
            <div class="relative">
                <img src="{{ asset('image/' . $vehicle->photopath) }}" alt="{{ $vehicle->Name }}" class="h-56 w-full object-cover">
                <div class="absolute top-4 left-4 bg-indigo-500 text-white text-xs font-extrabold py-1.5 px-3 rounded-full shadow-lg">
                    {{ ucfirst($vehicle->status) }}
                </div>
                <div class="absolute top-4 right-4 bg-gray-800 text-white text-xs font-extrabold py-1.5 px-3 rounded-full shadow-lg">
                    {{ ucfirst($vehicle->type) }}
                </div>
            </div>
            <!-- Details Section -->
            <div class="p-4 space-y-2">
                <h2 class="text-2xl font-bold text-gray-900 truncate">{{ $vehicle->Name }}</h2>
                <p class="text-base text-gray-800"><strong>Model:</strong> {{ $vehicle->Model }}</p>
                <p class="text-base text-gray-800"><strong>Brand:</strong> {{ $vehicle->Brand }}</p>
                <p class="text-base text-gray-800"><strong>Price Per Day:</strong> ${{ number_format($vehicle->Price_Per_Day, 2) }}</p>
                <p class="text-base text-gray-800"><strong>Description:</strong> {{ $vehicle->description }}</p>
                <p class="text-base text-gray-800"><strong>Number Plate:</strong> {{ $vehicle->number_plate }}</p>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between items-center p-2 bg-gray-100">
                <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="bg-blue-600 text-white text-sm py-2 px-4 rounded-lg shadow hover:bg-blue-700 flex items-center">
                    Edit
                </a>
                <a href="{{ route('vehicle.destroy', $vehicle->id) }}" class="bg-red-600 text-white text-sm py-2 px-4 rounded-lg shadow hover:bg-red-700 flex items-center" onclick="return confirm('Are you sure you want to delete this vehicle?')">
                    Delete
                </a>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
