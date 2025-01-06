@extends('layouts.master')
@section('content')
<section class="py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Contact Us</h2>
        <div class="grid grid-cols-2 gap-8">
            <div>
                <h3 class="text-2xl font-bold mb-4">Get in Touch</h3>
                <form action="{{ route('messages.store') }}" method="POST" class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-yellow-500">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500" placeholder="Your Name" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500" placeholder="Your Email" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-lg font-medium mb-2">Message</label>
                <textarea id="message" name="message" class="w-full px-4 py-2 border border-gray-300 rounded-lg h-32 focus:ring-2 focus:ring-yellow-500" placeholder="Your Message" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="px-6 py-3 bg-yellow-500 text-black font-bold rounded-full hover:bg-yellow-600 transition-colors duration-300">
                    SEND MESSAGE
                </button>
            </div>
        </form>
    </div>
            <div>
                <h3 class="text-2xl font-bold mb-4">Our Office</h3>
                <p>Email: contact@rentaly.com<br>Phone: +208 333 9296</p>
                <p>Address: 123,<br>Chitwan<br>Nepal</p>
                <div id="map" class="w-full h-64 bg-gray-300 mt-6"></div>
            </div>
        </div>
    </div>
</section>
@endsection

