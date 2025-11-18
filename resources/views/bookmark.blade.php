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
    
    @keyframes pulse-slow {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }
    
    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease-out;
    }
    
    .animate-slideInLeft {
        animation: slideInLeft 0.6s ease-out;
    }
    
    .card-hover {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px -12px rgba(59, 130, 246, 0.4);
    }
</style>

<!-- Page Header -->
<div class="relative bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-20 mb-12">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="animation-delay: 1s;"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center relative z-10 space-y-6 animate-fadeInUp">
        <div class="inline-block">
            <span class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                💖 Your Saved Vehicles
            </span>
        </div>
        <h1 class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
            My Bookmarks
        </h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
            Your favorite vehicles are waiting! Review your bookmarks and book your perfect ride today.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-4">
            <a href="{{ route('historyindex') }}"
               class="inline-flex items-center gap-2 bg-gradient-to-r from-cyan-500 via-blue-500 to-indigo-600 hover:from-cyan-600 hover:via-blue-600 hover:to-indigo-700 text-white px-8 py-4 rounded-full shadow-xl hover:scale-105 transform transition font-semibold">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                View Booking History
            </a>
            <a href="{{ route('Cars') }}"
               class="inline-flex items-center gap-2 bg-white hover:bg-gray-50 text-gray-800 px-8 py-4 rounded-full shadow-lg hover:scale-105 transform transition font-semibold border-2 border-gray-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                Browse More Cars
            </a>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 pb-20">
    <!-- Stats Banner -->
    @if(count($bookmarks) > 0)
    <div class="grid md:grid-cols-3 gap-6 mb-12 animate-fadeInUp">
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-blue-100 text-center">
            <div class="bg-gradient-to-br from-blue-100 to-blue-200 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"></path>
                </svg>
            </div>
            <h3 class="text-3xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">{{ count($bookmarks) }}</h3>
            <p class="text-gray-600 font-semibold">Saved Vehicles</p>
        </div>
        
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-indigo-100 text-center">
            <div class="bg-gradient-to-br from-indigo-100 to-indigo-200 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                <svg class="w-8 h-8 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <h3 class="text-3xl font-extrabold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                Rs. {{ number_format($bookmarks->sum(function($b) { return $b->vehicle->Price_Per_Day * $b->days; })) }}
            </h3>
            <p class="text-gray-600 font-semibold">Total Value</p>
        </div>
        
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-purple-100 text-center">
            <div class="bg-gradient-to-br from-purple-100 to-purple-200 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3">
                <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <h3 class="text-3xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                {{ $bookmarks->sum('days') }}
            </h3>
            <p class="text-gray-600 font-semibold">Total Days</p>
        </div>
    </div>
    @endif
    
    <!-- Bookmarks Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($bookmarks as $index => $bookmark)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100 animate-slideInLeft" style="animation-delay: {{ $index * 0.1 }}s;">
                <!-- Image Section -->
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('image/'.$bookmark->vehicle->photopath) }}"
                         alt="{{ $bookmark->vehicle->Name }}"
                         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    
                    <!-- Bookmark Badge -->
                    <div class="absolute top-4 right-4 bg-gradient-to-r from-pink-500 to-red-500 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg flex items-center gap-1">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                        </svg>
                        Saved
                    </div>
                    
                    <!-- Quick Action on Hover -->
                    <div class="absolute bottom-4 left-0 right-0 px-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="bg-white/95 backdrop-blur-sm rounded-xl p-3 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">View Details</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="p-6 space-y-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $bookmark->vehicle->Name }}</h2>
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ $bookmark->vehicle->Brand ?? 'Premium Vehicle' }}</span>
                        </div>
                    </div>
                    
                    <!-- Pricing Info -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-4 space-y-3 border border-blue-100">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 text-sm">Price per day</span>
                            <span class="text-lg font-bold text-gray-900">Rs. {{ number_format($bookmark->vehicle->Price_Per_Day) }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 text-sm">Duration</span>
                            <span class="text-lg font-bold text-indigo-600">{{ $bookmark->days }} {{ $bookmark->days == 1 ? 'Day' : 'Days' }}</span>
                        </div>
                        <div class="pt-3 border-t border-blue-200 flex justify-between items-center">
                            <span class="text-gray-700 font-semibold">Total Amount</span>
                            <span class="text-2xl font-extrabold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                                Rs. {{ number_format($bookmark->vehicle->Price_Per_Day * $bookmark->days) }}
                            </span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="grid grid-cols-2 gap-3 pt-2">
                        <button onclick="showmodal('{{ $bookmark->id }}')"
                                class="flex items-center justify-center gap-2 bg-gradient-to-r from-red-500 to-pink-600 hover:from-red-600 hover:to-pink-700 text-white px-4 py-3 rounded-xl transition font-semibold shadow-lg hover:shadow-xl transform hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Remove
                        </button>
                        <a href="{{ route('checkout', $bookmark->id) }}"
                           class="flex items-center justify-center gap-2 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white px-4 py-3 rounded-xl transition font-semibold shadow-lg hover:shadow-xl transform hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full">
                <div class="text-center py-20 animate-fadeInUp">
                    <div class="bg-gradient-to-br from-gray-100 to-gray-200 w-32 h-32 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-700 mb-3">No Bookmarks Yet</h3>
                    <p class="text-gray-500 mb-8 max-w-md mx-auto">
                        Start exploring our premium fleet and save your favorite vehicles for quick booking!
                    </p>
                    <a href="{{ route('Cars') }}"
                       class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 text-white px-8 py-4 rounded-full shadow-xl hover:scale-105 transform transition font-semibold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Browse Vehicles
                    </a>
                </div>
            </div>
        @endforelse
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden items-center justify-center transition-all duration-300 z-50" id="deletemodal">
    <form action="{{ route('bookmarks.destroy') }}" method="POST"
          class="bg-white p-10 rounded-3xl shadow-2xl max-w-md w-full mx-4 space-y-6 transform transition-all duration-300 scale-95 opacity-0" id="modalContent">
        @csrf
        @method('DELETE')
        <input type="hidden" name="dataid" id="dataid">
        
        <!-- Icon -->
        <div class="bg-gradient-to-br from-red-100 to-pink-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto">
            <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
        </div>
        
        <div class="text-center">
            <h1 class="text-2xl font-bold text-gray-900 mb-3">
                Remove Bookmark?
            </h1>
            <p class="text-gray-600">
                Are you sure you want to remove this vehicle from your bookmarks? This action cannot be undone.
            </p>
        </div>
        
        <!-- Action Buttons -->
        <div class="grid grid-cols-2 gap-4">
            <button type="button" onclick="hidemodal()"
                    class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold rounded-xl transition">
                Cancel
            </button>
            <button type="submit"
                    class="px-6 py-3 bg-gradient-to-r from-red-500 to-pink-600 hover:from-red-600 hover:to-pink-700 text-white font-bold rounded-xl shadow-lg transition">
                Yes, Remove
            </button>
        </div>
    </form>
</div>

<!-- Modal Script -->
<script>
    function hidemodal() {
        const modal = document.getElementById('deletemodal');
        const modalContent = document.getElementById('modalContent');
        
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 200);
    }

    function showmodal(id) {
        document.getElementById('dataid').value = id;
        const modal = document.getElementById('deletemodal');
        const modalContent = document.getElementById('modalContent');
        
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }, 10);
    }
    
    // Close modal on backdrop click
    document.getElementById('deletemodal').addEventListener('click', function(e) {
        if (e.target === this) {
            hidemodal();
        }
    });
</script>
@endsection
