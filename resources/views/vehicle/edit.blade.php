@extends('layouts.app')

@section('title')
    edit Vehicle
@endsection

@section('content')
<form action="{{route('vehicle.update',$vehicles->id)}}" method="post" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-5">
        <input 
            type="text" 
            placeholder="Enter car name" 
            class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" 
            name="Name" 
            value="{{$vehicles->Name}}">
        @error('Name')
            <div class="text-red-500 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>
    <div class="grid grid-cols-2 gap-10">
        <div class="mb-5">
            <input 
                type="text" 
                placeholder="Enter car model" 
                class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" 
                name="Model" 
                value="{{$vehicles->Model}}">
            @error('Model')
                <div class="text-red-700 mt-2 text-sm">
                    *{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-5">
            <input 
                type="text" 
                placeholder="Enter car brand name " 
                class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" 
                name="Brand" 
                value="{{$vehicles->Brand}}">
            @error('Brand')
                <div class="text-red-700 mt-2 text-sm">
                    *{{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="mb-5">
        <input 
            type="text" 
            placeholder="Enter price per day" 
            class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" 
            name="Price_Per_Day" 
            value="{{$vehicles->Price_Per_Day}}">
        @error('Price_Per_Day')
            <div class="text-red-700 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>
   
    <div class="mb-5">
    <h1>Enter Description</h1>
        <input type="text" placeholder="Enter description" class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" name="description" 
            value="{{ $vehicles->description}}">
        @error('description')
            <div class="text-red-700 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>
   
    <div class="mb-5">
    <h1>Enter car type</h1>
        <input type="text" placeholder="Enter car type" class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" name="type" 
            value="{{ $vehicles->type }}">
        @error('type')
            <div class="text-red-700 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-5">
    <h1>Enter car status</h1>
        <input type="text" placeholder="Enter car status" class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" name="status" 
            value="{{ $vehicles->status }}">
        @error('status')
            <div class="text-red-700 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-5">
    <h1>Enter car number plate </h1>
        <input type="text" placeholder="Enter car number plate " class="p-3 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" name="number_plate" 
            value="{{ $vehicles->number_plate }}">
        @error('number_plate')
            <div class="text-red-700 mt-2 text-sm">
                *{{ $message }}
            </div>
        @enderror
    </div>
   
    <div class="mb-5">
    <input type="file" placeholder="Enter Photo Path" class="p-3 w-full rounded-lg" name="photopath"
    value="{{$vehicles->photopath}}">
    @error('photopath')
     <div class="text-red-700 mt-2 text-sm">
       * {{$message}}
     </div>
   @enderror
</div>
        
    <div class="flex justify-center">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-5 rounded font-bold transition duration-300">update Vehicle</button>
        <a href="{{ route('vehicle.index') }}" class="bg-red-500 hover:bg-red-600 text-white py-3 px-5 rounded font-bold ml-3 transition duration-300">Cancel</a>
    </div>
</form>
@endsection
