@extends('layouts.master')
@section('content')
<h1 class="text-blue-800 text-4xl text-center font-bold my-20">My Bookmark</h1>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-10 px-5 md:px-20 py-10">
    <!-- Bookmarks Section -->
    <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-5">
        @foreach ($bookmarks as $bookmark)
        <div class="p-5 border shadow-lg flex gap-5 items-center">
            <img src="{{ asset('image/'.$bookmark->vehicle->photopath) }}" alt="Vehicle Image" class="w-32 h-32 object-cover rounded-lg">
            <div class="flex-1">
                <h1 class="text-xl font-bold">{{ $bookmark->vehicle->Name }}</h1>
                <p>Price: Rs. {{ $bookmark->vehicle->Price_Per_Day }}</p>
                <p>Days: {{$bookmark->days}}</p>
                <p>Total: {{$bookmark->vehicle->Price_Per_Day * $bookmark->days}}</p>
            </div>
            <div class="grid gap-3">
                <a onclick="showmodal('{{ $bookmark->id }}')" class="bg-red-700 text-white px-3 py-2 rounded-lg text-center cursor-pointer">Remove</a>
                <a href="{{ route('checkout', $bookmark->id) }}" class="bg-green-700 text-white px-3 py-2 rounded-lg text-center cursor-pointer">book Now</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center" id="deletemodal">
    <form action="{{ route('bookmarks.destroy') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf
        @method('DELETE')
        <input type="hidden" name="dataid" id="dataid">
        <h1 class="text-2xl font-bold text-center text-blue-700 mb-5">
            Are you sure you want to delete this bookmark?
        </h1>
        <div class="flex justify-center gap-5">
            <button type="submit" class="bg-blue-600 text-white px-5 py-3 rounded-lg">Yes, Delete</button>
            <button type="button" onclick="hidemodal()" class="bg-red-600 text-white px-5 py-3 rounded-lg">No</button>
        </div>
    </form>
</div>

<script>
    function hidemodal() {
        document.getElementById('deletemodal').classList.add('hidden');
        document.getElementById('deletemodal').classList.remove('flex');
    }

    function showmodal(id) {
        document.getElementById('dataid').value = id;
        document.getElementById('deletemodal').classList.add('flex');
        document.getElementById('deletemodal').classList.remove('hidden');
    }
</script>
@endsection
