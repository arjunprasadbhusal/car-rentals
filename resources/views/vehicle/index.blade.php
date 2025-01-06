@extends('layouts.app')

@section('title')
    Our Cars
@endsection

@section('content')
<div class="text-right my-5">
    <a href="{{ route('vehicle.create') }}" class="bg-indigo-800 text-white py-3 px-5 rounded-lg">Add Vehicle</a>
</div>

<table class="mt-5 w-full">
    <thead>
        <tr>
            <th class="border p-2 bg-cyan-500">S.N</th>
            <th class="border p-2 bg-cyan-500">Name</th>
            <th class="border p-2 bg-cyan-500">Model</th>
            <th class="border p-2 bg-cyan-500">Brand</th>
            <th class="border p-2 bg-cyan-500">Price Per Day</th>
            <th class="border p-2 bg-cyan-500">description</th>
            <th class="border p-2 bg-cyan-500">Number_plate</th>
            <th class="border p-2 bg-cyan-500">Type</th>
            <th class="border p-2 bg-cyan-500">Status</th>
            <th class="border p-2 bg-cyan-500">Picture</th>
            <th class="border p-2 bg-cyan-500">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicles as $vehicle)
            <tr class="text-center bg-gray-300">
                <td class="border p-2">{{ $loop->iteration }}</td>
                <td class="border p-2">{{ $vehicle->Name }}</td>
                <td class="border p-2">{{ $vehicle->Model }}</td>
                <td class="border p-2">{{ $vehicle->Brand }}</td>
                <td class="border p-2">{{ $vehicle->Price_Per_Day }}</td>
                <td class="border p-2">{{ $vehicle->description }}</td>
                <td class="border p-2">{{ $vehicle->number_plate }}</td>
                <td class="border p-2">{{ $vehicle->type }}</td>
                <td class="border p-2">{{ $vehicle->status}}</td>
                <td class="border p-2"><img src="{{asset('image/'.$vehicle->photopath)}}" alt="" class="h-20">
                </td>
                <td class="border p-2">
                    <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="bg-indigo-500 text-white px-3 py-1.5 rounded-lg" onclick="return confirm('are you sure to edit')">Edit</a>
                    <a href="{{ route('vehicle.destroy', $vehicle->id) }}" class="bg-red-500 text-white px-3 py-1.5 rounded-lg" onclick="return confirm('Are you sure you want to delete this vehicle?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
