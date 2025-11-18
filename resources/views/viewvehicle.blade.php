@extends('layouts.master')

@section('content')

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease-out;
    }
    
    .animate-slideInLeft {
        animation: slideInLeft 0.6s ease-out;
    }
    
    .animate-slideInRight {
        animation: slideInRight 0.6s ease-out;
    }
    
    .image-zoom {
        overflow: hidden;
    }
    
    .image-zoom img {
        transition: transform 0.5s ease;
    }
    
    .image-zoom:hover img {
        transform: scale(1.1);
    }
</style>

<div class="container mx-auto px-6 py-12">
    <!-- Breadcrumb -->
    <div class="mb-8 animate-fadeInUp">
        <div class="flex items-center gap-2 text-sm text-gray-600">
            <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Home</a>
            <i class="ri-arrow-right-s-line"></i>
            <a href="{{ route('Cars') }}" class="hover:text-blue-600 transition">Cars</a>
            <i class="ri-arrow-right-s-line"></i>
            <span class="text-gray-900 font-semibold">{{ $vehicle->Name }}</span>
        </div>
    </div>

    <!-- Main Vehicle Details -->
    <div class="grid lg:grid-cols-2 gap-12 mb-16">
        <!-- Vehicle Image Gallery -->
        <div class="animate-slideInLeft">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-gray-200 image-zoom">
                <img src="{{ asset('image/' . $vehicle->photopath) }}"
                     alt="{{ $vehicle->Name }}"
                     class="w-full h-[500px] object-cover">
                
                <!-- Availability Badge -->
                @if($vehicle->is_available)
                <div class="absolute top-6 left-6 bg-gradient-to-r from-green-500 to-emerald-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Available Now
                </div>
                @else
                <div class="absolute top-6 left-6 bg-gradient-to-r from-red-500 to-pink-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd"></path>
                    </svg>
                    Currently Booked
                </div>
                @endif
            </div>
            
            <!-- Vehicle Features -->
            <div class="mt-6 grid grid-cols-3 gap-4">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-4 text-center border border-blue-100">
                    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                        <i class="ri-car-line text-white text-2xl"></i>
                    </div>
                    <p class="text-xs text-gray-600 font-semibold">Vehicle Type</p>
                    <p class="text-sm font-bold text-gray-900">{{ $vehicle->type ?? 'Sedan' }}</p>
                </div>
                
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-4 text-center border border-purple-100">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                        <i class="ri-service-line text-white text-2xl"></i>
                    </div>
                    <p class="text-xs text-gray-600 font-semibold">Brand</p>
                    <p class="text-sm font-bold text-gray-900">{{ $vehicle->Brand ?? 'Premium' }}</p>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-4 text-center border border-green-100">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                        <i class="ri-star-fill text-white text-2xl"></i>
                    </div>
                    <p class="text-xs text-gray-600 font-semibold">Rating</p>
                    <p class="text-sm font-bold text-gray-900">4.5/5.0</p>
                </div>
            </div>
        </div>

        <!-- Vehicle Info & Booking -->
        <div class="animate-slideInRight space-y-8">
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">{{ $vehicle->Name }}</h1>
                
                <!-- Rating -->
                <div class="flex items-center gap-3 mb-6">
                    <div class="flex gap-1">
                        @for($i = 1; $i <= 5; $i++)
                            <svg class="w-6 h-6 {{ $i <= 4 ? 'text-amber-400' : 'text-gray-300' }} fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                        @endfor
                    </div>
                    <span class="text-gray-600 font-semibold">({{ $reviews->count() }} reviews)</span>
                </div>
                
                <!-- Price -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100">
                    <div class="flex items-baseline gap-2">
                        <span class="text-sm text-gray-600 font-semibold">Starting from</span>
                    </div>
                    <div class="flex items-baseline gap-2 mt-2">
                        <h2 class="text-5xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Rs. {{ number_format($vehicle->Price_Per_Day) }}</h2>
                        <span class="text-lg text-gray-500 font-semibold">/ day</span>
                    </div>
                </div>
            </div>

            <!-- Booking Form -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-200">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                    <i class="ri-bookmark-3-fill text-blue-600"></i>
                    Bookmark This Vehicle
                </h3>
                
                <form action="{{ route('bookmarks.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                    
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-3">Select Number of Days</label>
                        <div class="flex items-center gap-4">
                            <button type="button"
                                    onclick="decreaseqty()"
                                    class="w-12 h-12 bg-gradient-to-br from-gray-100 to-gray-200 hover:from-gray-200 hover:to-gray-300 text-gray-700 rounded-xl font-bold text-2xl flex items-center justify-center shadow-lg transition transform hover:scale-110">
                                −
                            </button>

                            <input type="text" name="days" id="days" value="1" readonly
                                   class="flex-1 py-4 text-center border-2 border-gray-200 rounded-xl text-2xl font-bold text-gray-900 shadow-sm bg-gray-50">

                            <button type="button"
                                    onclick="increaseqty()"
                                    class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white rounded-xl font-bold text-2xl flex items-center justify-center shadow-lg transition transform hover:scale-110">
                                +
                            </button>
                        </div>
                        <p class="text-sm text-gray-500 mt-2 flex items-center gap-1">
                            <i class="ri-information-line"></i>
                            Maximum 60 days rental period
                        </p>
                    </div>

                    <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 text-white font-bold text-lg px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105 flex items-center justify-center gap-2">
                        <i class="ri-bookmark-fill text-xl"></i>
                        Add to Bookmarks
                    </button>
                </form>
            </div>
            
            <!-- Quick Info -->
            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                <div class="flex items-start gap-4">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="ri-shield-check-fill text-white text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">100% Verified Vehicle</h4>
                        <p class="text-sm text-gray-600">All our vehicles are thoroughly inspected and maintained to ensure your safety and comfort.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Description Section -->
    <div class="mb-16 animate-fadeInUp">
        <div class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 rounded-3xl shadow-xl p-8 md:p-12 border border-blue-100">
            <div class="flex items-center gap-3 mb-6">
                <div class="bg-gradient-to-br from-blue-500 to-indigo-600 w-12 h-12 rounded-xl flex items-center justify-center">
                    <i class="ri-file-list-3-fill text-white text-2xl"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900">Vehicle Description</h2>
            </div>
            
            <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg">
                <p class="text-lg text-gray-700 leading-relaxed">
                    {{ $vehicle->description ?? 'Experience comfort and style with this premium vehicle. Perfect for any journey, whether business or leisure. Equipped with modern features and maintained to the highest standards.' }}
                </p>
            </div>
        </div>
    </div>

    <!-- User Reviews Section -->
    <div class="mb-16 animate-fadeInUp" style="animation-delay: 0.2s;">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-3">
                <div class="bg-gradient-to-br from-amber-500 to-orange-600 w-12 h-12 rounded-xl flex items-center justify-center">
                    <i class="ri-chat-quote-fill text-white text-2xl"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900">Customer Reviews</h2>
            </div>
            <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-bold">
                {{ $reviews->count() }} {{ $reviews->count() == 1 ? 'Review' : 'Reviews' }}
            </span>
        </div>
        
        @if ($reviews->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($reviews as $index => $review)
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-br from-blue-500 to-indigo-600 w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg mr-3">
                            {{ substr($review->user->name, 0, 1) }}
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">{{ $review->user->name }}</h3>
                            <div class="flex gap-1 mt-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 {{ $i <= $review->rating ? 'text-amber-400' : 'text-gray-300' }} fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed">{{ $review->review }}</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-500 flex items-center gap-1">
                            <i class="ri-time-line"></i>
                            {{ $review->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
        @else
        <div class="bg-gradient-to-br from-yellow-50 to-orange-50 border-2 border-yellow-200 rounded-2xl p-8 text-center">
            <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="ri-chat-off-line text-white text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">No Reviews Yet</h3>
            <p class="text-gray-600">Be the first to share your experience with this vehicle!</p>
        </div>
        @endif
    </div>


    <!-- Add Review Form -->
    @auth
    <div class="mb-16 animate-fadeInUp" style="animation-delay: 0.3s;">
        @php
        $user_id = Auth::user()->id;
        $count = App\Models\Bookings::where('user_id', $user_id)->where('vehicle_id', $vehicle->id)->count();
        @endphp
        
        @if($count > 0)
        <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 border border-gray-200">
            <div class="flex items-center gap-3 mb-8">
                <div class="bg-gradient-to-br from-green-500 to-emerald-600 w-12 h-12 rounded-xl flex items-center justify-center">
                    <i class="ri-edit-box-fill text-white text-2xl"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900">Share Your Experience</h2>
            </div>
            
            <form action="{{ route('reviews.store') }}" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">

                <!-- Review Input -->
                <div>
                    <label for="review" class="block text-lg font-bold text-gray-800 mb-3">Your Review</label>
                    <textarea id="review" name="review" rows="5" 
                              class="w-full p-4 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition text-gray-700" 
                              placeholder="Tell us about your experience with this vehicle..." required></textarea>
                </div>

                <!-- Rating Input -->
                <div>
                    <label class="block text-lg font-bold text-gray-800 mb-3">Your Rating</label>
                    <div class="flex items-center gap-2" id="starRating">
                        @for($i = 1; $i <= 5; $i++)
                            <label class="cursor-pointer">
                                <input type="radio" name="rating" value="{{ $i }}" class="hidden">
                                <svg data-value="{{ $i }}" id="rating{{$i}}" 
                                     class="star w-12 h-12 text-gray-300 hover:text-amber-400 transition duration-200" 
                                     fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                </svg>
                            </label>
                        @endfor
                    </div>
                    <p class="text-sm text-gray-500 mt-2">Click on the stars to rate</p>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-gradient-to-r from-green-500 via-emerald-600 to-teal-600 hover:from-green-600 hover:via-emerald-700 hover:to-teal-700 text-white py-4 rounded-xl text-lg font-bold shadow-lg hover:shadow-xl transition transform hover:scale-105 flex items-center justify-center gap-2">
                    <i class="ri-send-plane-fill text-xl"></i>
                    Submit Your Review
                </button>
            </form>
        </div>
        @else
        <div class="bg-gradient-to-br from-yellow-50 to-orange-50 border-2 border-yellow-300 rounded-2xl p-8 text-center shadow-lg">
            <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="ri-lock-fill text-white text-3xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">Review Locked</h3>
            <p class="text-gray-600 mb-6">You need to book and complete a rental before leaving a review for this vehicle.</p>
            <a href="{{ route('Cars') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-xl font-bold hover:from-blue-700 hover:to-indigo-700 transition shadow-lg">
                <i class="ri-car-line"></i>
                Browse Other Vehicles
            </a>
        </div>
        @endif
    </div>
    @else
    <div class="mb-16 animate-fadeInUp" style="animation-delay: 0.3s;">
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-300 rounded-2xl p-8 text-center shadow-lg">
            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="ri-user-line text-white text-3xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">Login Required</h3>
            <p class="text-gray-600 mb-6">Please log in to your account to leave a review for this vehicle.</p>
            <a href="{{ route('login') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-xl font-bold hover:from-blue-700 hover:to-indigo-700 transition shadow-lg">
                <i class="ri-login-box-line"></i>
                Login Now
            </a>
        </div>
    </div>
    @endauth
    <!-- Related Vehicles -->
    <div class="animate-fadeInUp" style="animation-delay: 0.4s;">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-3">
                <div class="bg-gradient-to-br from-purple-500 to-pink-600 w-12 h-12 rounded-xl flex items-center justify-center">
                    <i class="ri-car-line text-white text-2xl"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900">You May Also Like</h2>
            </div>
        </div>
        
        @if(count($relatedvehicles) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($relatedvehicles as $index => $relatedvehicle)
                <a href="{{ route('viewvehicle', $relatedvehicle->id) }}" 
                   class="group bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition transform hover:-translate-y-2" 
                   style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="relative image-zoom">
                        <img src="{{ asset('image/' . $relatedvehicle->photopath) }}" 
                             alt="{{ $relatedvehicle->Name }}" 
                             class="h-48 w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition"></div>
                        
                        <!-- Availability Badge -->
                        @if($relatedvehicle->is_available)
                        <div class="absolute top-3 right-3 bg-green-500 text-white px-2 py-1 rounded-lg text-xs font-bold shadow-lg">
                            Available
                        </div>
                        @endif
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition line-clamp-1">
                            {{ $relatedvehicle->Name }}
                        </h3>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs text-gray-500">Starting from</p>
                                <p class="text-xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                                    Rs. {{ number_format($relatedvehicle->Price_Per_Day) }}
                                </p>
                            </div>
                            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 w-10 h-10 rounded-full flex items-center justify-center group-hover:scale-110 transition">
                                <i class="ri-arrow-right-line text-white text-xl"></i>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        @else
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-8 text-center">
            <i class="ri-car-line text-gray-400 text-5xl mb-3"></i>
            <p class="text-gray-600">No related vehicles available at the moment.</p>
        </div>
        @endif
    </div>
</div>

<!-- Quantity Increment/Decrement Script -->
<script>
    function increaseqty() {
        let days = parseInt(document.getElementById('days').value);
        let maxDay = 60;
        if (days < maxDay) {
            days++;
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

    // Star Rating System
    const stars = document.querySelectorAll('#starRating .star');

    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            // Remove yellow color from all stars
            stars.forEach(s => s.classList.remove('text-amber-400'));
            stars.forEach(s => s.classList.add('text-gray-300'));
            
            // Add yellow color to all stars up to and including the clicked star
            for (let i = 0; i <= index; i++) {
                stars[i].classList.remove('text-gray-300');
                stars[i].classList.add('text-amber-400');
            }
            
            // Select the corresponding radio button
            const radioInput = star.previousElementSibling || star.parentElement.querySelector('input[type="radio"]');
            if (radioInput) {
                radioInput.checked = true;
            }
        });
        
        // Hover effect
        star.addEventListener('mouseenter', () => {
            stars.forEach((s, i) => {
                if (i <= index) {
                    s.classList.add('text-amber-300');
                }
            });
        });
        
        star.addEventListener('mouseleave', () => {
            stars.forEach(s => s.classList.remove('text-amber-300'));
        });
    });
</script>
@endsection