@extends('layouts.master')

@section('content')
<div class="container mx-auto px-10 py-10">
    <!-- Main Vehicle Details -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Vehicle Image -->
        <div class="col-span-1">
            <img src="{{ asset('image/' . $vehicle->photopath) }}" 
                 alt="{{ $vehicle->Name }}" 
                 class="h-96 w-full object-cover rounded-lg shadow-md">
        </div>

        <!-- Vehicle Info -->
        <div class="col-span-2 border-l-2 border-gray-200 px-6">
            <h1 class="text-4xl font-bold text-blue-800">{{ $vehicle->Name }}</h1>
            <h2 class="text-2xl font-bold mt-4 text-gray-600">Price Per Day Rs.{{ $vehicle->Price_Per_Day }}</h2>

            <!-- Quantity Selector -->
            <form action="{{route('bookmarks.store')}}" method="post" class="mt-6">
                @csrf
                <div class="flex items-center gap-4">
                    <button type="button" 
                            class="py-2 bg-blue-600 text-white px-4 text-xl rounded hover:bg-blue-700" 
                            onclick="decreaseqty()">-</button>
                    <input type="text"  name="days" id="days" class="w-16 py-2 text-center border rounded-lg" value="1" readonly>
                    <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                    <button type="button" 
                            class="py-2 bg-blue-600 text-white px-4 text-xl rounded hover:bg-blue-700" 
                            onclick="increaseqty()">+</button>
                    <p class="text-gray-500 mt-1">In days:<span id="day">unlimited</span></p>

                </div>
               
                <button type="submit" 
                class="bg-gradient-to-r from-red-600 via-yellow-400 to-gray-600 text-white px-3 py-1.5 
                rounded-lf mt-4 inline-block">
                    Bookmark
                </button>
            </form>

            <!-- Delivery Info -->
            <div class="mt-8 space-y-2">
                <p><span class="font-bold text-green-600">✔</span> Free delivery</p>
                <p><span class="font-bold text-green-600">✔</span> Delivery in 2-3 days</p>
                <p><span class="font-bold text-green-600">✔</span> 7-day return policy</p>
            </div>
        </div>
    </div>

    <!-- Description Section -->
    <div class="mt-12">
        <h1 class="text-2xl font-bold">Description</h1>
        <p class="text-gray-700 mt-4 leading-6">{{ $vehicle->description }}</p>
    </div>
    
    <div class="mt-12">
    <h2 class="text-3xl font-bold text-gray-900 mb-4">User Reviews</h2>
    @if ($reviews->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($reviews as $review)
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 text-yellow-400" viewBox="0 0 24 24">
                            <path d="M12 .587l3.668 7.431 8.215 1.192-5.945 5.798 1.402 8.192L12 18.902l-7.34 3.798 1.402-8.192L.873 9.21l8.215-1.192L12 .587z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">{{ $review->user->name }}</h3>
                </div>
                <p class="text-gray-700">{{ $review->review }}</p>
                <div class="mt-2 text-yellow-500">
                    Rating: {{ str_repeat('★', $review->rating) }}{{ str_repeat('☆', 5 - $review->rating) }}
                </div>
            </div>
        @endforeach
    </div>
    @else
    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-6 rounded-lg">
        <p>No reviews yet. Be the first to leave a review!</p>
    </div>
    @endif
</div>


    <!-- Add Review Form -->
    <div class="mt-12">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-8 text-center">Add Your Review</h2>

        @auth
        <div class="bg-gradient-to-r from-white to-blue-50 rounded-xl shadow-lg p-8 max-w-3xl mx-auto">
            <form action="{{ route('reviews.store') }}" method="POST" class="space-y-8">
                @csrf
                <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">

                <!-- Review Input -->
                <div>
                    <label for="review" class="block text-lg font-bold text-gray-800 mb-2">Your Review</label>
                    <textarea id="review" name="review" rows="4" class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent" placeholder="Share your experience with this vehicle..." required></textarea>
                </div>

                <!-- Rating Input -->
                <div>
                    <label class="block text-lg font-bold text-gray-800 mb-2">Rating</label>
                    <div class="flex items-center space-x-2" id="starRating">
                        @for($i = 1; $i <= 5; $i++)
                            <label>
                                <input type="radio" name="rating" onclick="handleRating(this.value)"  value="{{ $i }}" class="hidden">
                                <svg data-value="{{ $i }}" id="rating{{$i}}" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="star w-8 h-8 text-gray-300 hover:text-yellow-400 cursor-pointer transition duration-200" viewBox="0 0 24 24">
                                    <path d="M12 .587l3.668 7.431 8.215 1.192-5.945 5.798 1.402 8.192L12 18.902l-7.34 3.798 1.402-8.192L.873 9.21l8.215-1.192L12 .587z"/>
                                </svg>
                            </label>
                        @endfor
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white py-3 rounded-lg text-lg font-semibold shadow-lg hover:from-blue-600 hover:to-blue-800 transition duration-200 focus:ring focus:ring-blue-400">
                        Submit Your Review
                    </button>
                </div>
            </form>
        </div>
        @else
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-6 rounded-lg max-w-3xl mx-auto">
            <p class="text-center text-lg font-medium">Please <a href="{{ route('login') }}" class="text-blue-600 underline hover:text-blue-800">log in</a> to leave a review.</p>
        </div>
        @endauth
    </div>
    <!-- Related Vehicles -->
    <div class="mt-12">
        <h1 class="text-2xl font-bold">Related Vehicles</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-6">
            @foreach ($relatedvehicles as $relatedvehicle)
                <div class="border rounded-lg shadow-md overflow-hidden">
                    <a href="{{ route('viewvehicle', $relatedvehicle->id) }}" class="block">
                        <img src="{{ asset('image/' . $relatedvehicle->photopath) }}" 
                             alt="{{ $relatedvehicle->Name }}" 
                             class="h-40 w-full object-cover">
                        <div class="p-4">
                            <h1 class="text-lg font-bold">{{ $relatedvehicle->Name }}</h1>
                            <p class="text-gray-600 font-semibold mt-2">Rs.{{ $relatedvehicle->Price_Per_Day }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Quantity Increment/Decrement Script -->
<script>
    function increaseqty() {
        let days = parseInt(document.getElementById('days').value);
        let day = 60
        if (days < day) {
            days++
            document.getElementById('days').value = days;
        }
    }

    function decreaseqty() {
        let days = parseInt(document.getElementById('days').value);
        if (days > 1) {
            days--;
            document.getElementById('days').value = days;
        }
    }


    // function handleRating(x){
    //     if(x == 1)
    //     {
    //         document.getElementById('rating1').style.color = "yellow";
    //         document.getElementById('rating2').style.color = "gray";
    //         document.getElementById('rating3').style.color = "gray";
    //         document.getElementById('rating4').style.color = "gray";
    //         document.getElementById('rating5').style.color = "gray";
    //     }

    //     if(x==2)

    // }

    const stars = document.querySelectorAll('#starRating .star');

// Add click event listener to each star
    stars.forEach((star, index) => {
    star.addEventListener('click', () => {
        // Remove yellow color from all stars
        stars.forEach(s => s.classList.remove('text-yellow-400'));
        // Add yellow color to all stars up to and including the clicked star
        for (let i = 0; i <= index; i++) {
            stars[i].classList.add('text-yellow-400');
        }
    });
});
</script>
@endsection
