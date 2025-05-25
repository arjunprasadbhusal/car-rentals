@extends('layouts.master')
@section('content')

<header class="relative">
    <img src="{{ asset('parking.jpg') }}" alt="Background" class="w-full h-screen object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
        <div class="text-center text-white px-8 py-4">
            <h1 class="text-5xl font-bold mb-4">
                <span class="text-green-400">Checkout</span>
            </h1>
        </div>
    </div>
</header>

<h1 class="text-5xl font-bold mb-4 text-center">
    <span class="text-black">Checkout</span>
</h1>

<div class="grid grid-cols-1 lg:grid-cols-5 gap-10 px-5 md:px-20 py-10">

    <!-- Vehicle Details -->
    <div class="col-span-2 flex flex-col gap-5 shadow-lg border rounded-lg bg-white p-5">
        <img src="{{ asset('image/' . $bookmark->vehicle->photopath) }}" alt="Vehicle Image" class="w-full h-auto object-cover rounded-lg">
        <div class="text-center">
            <h2 class="text-2xl font-semibold text-gray-800">{{ $bookmark->vehicle->Name }}</h2>
            <p class="text-lg text-gray-600 mt-2">Price Per Day: ${{ number_format($bookmark->vehicle->Price_Per_Day, 2) }}</p>
            <p class="text-lg text-gray-600 mt-2">Days: {{ $bookmark->days }}</p>
            <p class="text-lg text-gray-800 font-semibold mt-2">Total: ${{ number_format($bookmark->vehicle->Price_Per_Day * $bookmark->days, 2) }}</p>
            <!-- Hidden inputs -->
            <input type="hidden" name="vehicle_id" value="{{ $bookmark->vehicle_id }}">
            <input type="hidden" name="days" value="{{ $bookmark->days }}">
            <input type="hidden" name="Price_Per_Day" value="{{ $bookmark->vehicle->Price_Per_Day }}">
            <input type="hidden" name="bookmark_id" value="{{ $bookmark->id }}">
        </div>
    </div>

    <!-- Vehicle Specifications -->
    <div>
        <h2 class="text-4xl font-semibold text-gray-800">{{ $bookmark->vehicle->Name }}</h2><br>
        <p class="text-2xl text-gray-800">
            The {{ $bookmark->vehicle->Name }} is the high performance version of 2 series 2-door coupe.
        </p>
        <br>
        <h2 class="text-2xl font-semibold text-gray-800">Specifications</h2>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-200 shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="border border-gray-300 p-4 text-left">Field</th>
                        <th class="border border-gray-300 p-4 text-left">Value</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-100">
                    <tr><td class="border border-gray-300 p-4">Body</td><td class="border border-gray-300 p-4">Sedan</td></tr>
                    <tr class="bg-gray-200"><td class="border border-gray-300 p-4">Seat</td><td class="border border-gray-300 p-4">2 seats</td></tr>
                    <tr><td class="border border-gray-300 p-4">Door</td><td class="border border-gray-300 p-4">2 doors</td></tr>
                    <tr class="bg-gray-200"><td class="border border-gray-300 p-4">Luggage</td><td class="border border-gray-300 p-4">150</td></tr>
                    <tr><td class="border border-gray-300 p-4">Fuel Type</td><td class="border border-gray-300 p-4">Hybrid</td></tr>
                    <tr class="bg-gray-200"><td class="border border-gray-300 p-4">Engine</td><td class="border border-gray-300 p-4">3000</td></tr>
                    <tr><td class="border border-gray-300 p-4">Year</td><td class="border border-gray-300 p-4">{{ $bookmark->vehicle->Model }}</td></tr>
                    <tr class="bg-gray-200"><td class="border border-gray-300 p-4">Mileage</td><td class="border border-gray-300 p-4">15.5</td></tr>
                    <tr><td class="border border-gray-300 p-4">Transmission</td><td class="border border-gray-300 p-4">Automatic</td></tr>
                    <tr class="bg-gray-200"><td class="border border-gray-300 p-4">Fuel Economy</td><td class="border border-gray-300 p-4">18.5</td></tr>
                    <tr><td class="border border-gray-300 p-4">Drive</td><td class="border border-gray-300 p-4">4WD</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Booking Form -->
    <form action="{{ route('bookings.store') }}" method="POST" id="checkout-form" class="col-span-2 shadow-lg border rounded-lg bg-white p-5 md:m-5 w-80">
        @csrf
        <!-- Hidden Inputs -->
        <input type="hidden" name="vehicle_id" value="{{ $bookmark->vehicle_id }}">
        <input type="hidden" name="Price_Per_Day" value="{{ $bookmark->vehicle->Price_Per_Day * ($bookmark->days ?? 1) }}">
        <input type="hidden" name="bookmark_id" value="{{ $bookmark->id }}">
        <input type="hidden" name="days" value="{{ $bookmark->days ?? 1 }}">

        <h3 class="text-2xl font-semibold text-gray-800 mb-5">Booking Information</h3>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Name" value="{{ auth()->user()->name }}" class="w-full border rounded-lg p-3 mb-3" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Address" value="{{ auth()->user()->address }}" class="w-full border rounded-lg p-3 mb-3" required>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Phone" value="{{ auth()->user()->phone }}" class="w-full border rounded-lg p-3 mb-3" required>

        <label for="pickup_date">Pickup Date</label>
        <input type="date" id="pickup_date" name="pickup_date" class="w-full border rounded-lg p-3 mb-3" onchange="updateReturnDate(this.value)" required>

        <label for="return_date">Return Date</label>
        <input type="date" id="return_date" name="return_date" class="w-full border rounded-lg p-3 mb-3" required>

        <label for="customer_email">Email</label>
        <input type="email" id="customer_email" name="customer_email" placeholder="Email" value="{{ auth()->user()->email }}" class="w-full border rounded-lg p-3 mb-3" required>

        <input type="hidden" name="ppd" value="{{ $bookmark->vehicle->Price_Per_Day }}">

        <h2 class="text-xl font-semibold text-gray-800">Total: ${{ number_format($bookmark->vehicle->Price_Per_Day * $bookmark->days, 2) }}</h2>

        <label for="payment_method" class="mt-4 block font-semibold">Payment Method</label>
        <select name="payment_method" id="payment_method" class="w-full border rounded-lg p-3 mt-2 mb-5" required>
            <option value="" disabled selected>Select payment method</option>
            <option value="COD">Cash On Delivery</option>
            <option value="ESEWA">Pay with eSewa</option>
        </select>

        <button type="submit" class="bg-blue-500 text-white w-full p-3 rounded-lg hover:bg-blue-600 transition duration-300">Checkout</button>
    </form>
</div>

<!-- eSewa Form -->
<form id="esewa-form" action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST" class="hidden">
    <input type="hidden" id="amount" name="amount" value="100" required>
    <input type="hidden" id="tax_amount" name="tax_amount" value="0" required>
    <input type="hidden" id="total_amount" name="total_amount" value="100" required>
    <input type="hidden" id="transaction_uuid" name="transaction_uuid" value="241028" required>
    <input type="hidden" id="product_code" name="product_code" value="EPAYTEST" required>
    <input type="hidden" id="product_service_charge" name="product_service_charge" value="0" required>
    <input type="hidden" id="product_delivery_charge" name="product_delivery_charge" value="0" required>
    <input type="hidden" id="success_url" name="success_url" value="{{ route('bookings.storeEsewa', $bookmark->id) }}" required>
    <input type="hidden" id="failure_url" name="failure_url" value="{{ route('mybookmark') }}" required>
    <input type="hidden" id="signed_field_names" name="signed_field_names" value="total_amount,transaction_uuid,product_code" required>
    <input type="hidden" id="signature" name="signature" value="" required>
</form>

@php
    $total_amount = $bookmark->vehicle->Price_Per_Day * $bookmark->days;
    $transaction_uuid = time();
    $msg = "total_amount=$total_amount,transaction_uuid=$transaction_uuid,product_code=EPAYTEST";
    $secret = "8gBm/:&EnhH.1/q";
    $s = hash_hmac('sha256', $msg, $secret, true);
    $signature = base64_encode($s);
@endphp

<script>
    function updateReturnDate(pickupValue) {
        if(!pickupValue) return;

        const pickupDate = new Date(pickupValue);
        const days = {{ $bookmark->days }};
        const returnDate = new Date(pickupDate);
        returnDate.setDate(pickupDate.getDate() + days);

        const returnDateInput = document.getElementById('return_date');
        returnDateInput.value = returnDate.toISOString().split('T')[0];
        returnDateInput.setAttribute('min', returnDate.toISOString().split('T')[0]);
    }

    document.addEventListener("DOMContentLoaded", function () {
        const today = new Date().toISOString().split("T")[0];
        const pickupDateInput = document.getElementById("pickup_date");
        const returnDateInput = document.getElementById("return_date");

        // Disable past dates for pickup date
        pickupDateInput.setAttribute("min", today);

        pickupDateInput.addEventListener("change", function () {
            const pickupDate = new Date(this.value);

            if (pickupDate) {
                const minReturnDate = new Date(pickupDate);
                minReturnDate.setDate(minReturnDate.getDate() + 1); // Return date must be after pickup date
                returnDateInput.setAttribute("min", minReturnDate.toISOString().split("T")[0]);

                if (new Date(returnDateInput.value) <= pickupDate) {
                    returnDateInput.value = ""; // Clear invalid return date
                }
            }
        });

        // Setup eSewa signature and values
        document.getElementById('amount').value = "{{ $total_amount }}";
        document.getElementById('total_amount').value = "{{ $total_amount }}";
        document.getElementById('transaction_uuid').value = "{{ $transaction_uuid }}";
        document.getElementById('signature').value = "{{ $signature }}";

        // Handle form submission based on payment method
        document.getElementById('checkout-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const paymentMethod = document.getElementById('payment_method').value;
            if(!paymentMethod) {
                alert('Please select a payment method.');
                return;
            }

            if(paymentMethod === 'ESEWA') {
                document.getElementById('esewa-form').submit();
            } else if(paymentMethod === 'COD') {
                this.submit();
            } else {
                alert('Invalid payment method selected.');
            }
        });
    });
</script>

@endsection
