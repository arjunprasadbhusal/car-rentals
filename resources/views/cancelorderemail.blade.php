<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Cancellation</title>
</head>
<body class="bg-gray-100 py-10 px-5 font-sans">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-2xl font-bold text-blue-800 border-b pb-4 mb-6">Booking Cancellation Notice</h1>

        <p class="text-gray-800 mb-4">Hello <span class="font-semibold">{{ $name }}</span>,</p>

        <p class="text-gray-700 mb-6">
            We would like to inform you that your booking has been 
            <span class="text-red-600 font-semibold">{{ $status }}</span>. Here are the details of your cancelled booking:
        </p>

        <div class="bg-gray-50 p-5 rounded-lg border mb-6">
            <p><span class="font-semibold">Vehicle Name:</span> {{ $vehicle->Name }}</p>
            <p><span class="font-semibold">Price per Day:</span> Rs. {{ $vehicle->Price_Per_Day }}</p>
            <p><span class="font-semibold">Days Booked:</span> {{ $Bookings->days }}</p>
            <p><span class="font-semibold">Total Amount:</span> Rs. {{ $vehicle->Price_Per_Day * $Bookings->days }}</p>
            <p><span class="font-semibold">Payment Method:</span> {{ $payment_method }}</p>
            <p><span class="font-semibold">Booking Date:</span> {{ \Carbon\Carbon::parse($Bookings->created_at)->format('d M, Y') }}</p>
        </div>

        <p class="text-gray-700 mb-4">
            If you have any questions or need assistance, feel free to contact our support team.
        </p>

        <p class="text-gray-700">Thank you for choosing our service.</p>

        <div class="mt-8 border-t pt-4 text-sm text-center text-gray-500">
            &copy; {{ date('Y') }} CarBooking System. All rights reserved.
        </div>
    </div>
</body>
</html>
