@extends('layouts.app')
@section('title') Bookings
@endsection
@section('content')
<table class="mt-5 w-full">

        <tr>
        <th class="border p-2 bg-green-700">Booking date</th>

            <th class="border p-2 bg-green-700">vehicle Image</th>
            <th class="border p-2 bg-green-700">Vehicle Name</th>
            <th class="border p-2 bg-green-700">Customer Name</th>
            <th class="border p-2 bg-green-700">Phone</th>
            <th class="border p-2 bg-green-700">Address</th>
            <th class="border p-2 bg-green-700">Customer Email</th>
            <th class="border p-2 bg-green-700">Pickup date</th>
            <th class="border p-2 bg-green-700">Return Date</th>
            <th class="border p-2 bg-green-700">Days</th>
            <th class="border p-2 bg-green-700">Price_Per_Day</th>
            <th class="border p-2 bg-green-700">Total</th>
            <th class="border p-2 bg-green-700">Payment Method</th>
            <th class="border p-2 bg-green-700">Status</th>
            <th class="border p-2 bg-green-700">Action</th>
        </tr>
        @foreach ($bookings as $booking )
        <tr>
            <td class="border p-2">{{$booking->created_at}}</td>
            <td class="border p-2">
                <img src="{{asset('image/'.$booking->vehicle->photopath)}}" alt="" class="h-28">
            </td>

            <td class="border p-2">{{$booking->vehicle->Name}}</td>
            <td class="border p-2">{{$booking->name}}</td>
            <td class="border p-2">{{$booking->phone}}</td>
            <td class="border p-2">{{$booking->address}}</td>
            <td class="border p-2">{{$booking->customer_email}}</td>
            <td class="border p-2">{{$booking->pickup_date}}</td>
            <td class="border p-2">{{$booking->return_date}}</td>
            <td class="border p-2">{{$booking->days}}</td>
            <td class="border p-2">{{$booking->price_per_day}}</td>
            <td class="border p-2">{{$booking->days*$booking->price_per_day}}</td>
            <td class="border p-2">{{$booking->payment_method}}</td>
            <td class="border p-2">{{$booking->status}}</td>
            <td class="border p-2 grid gap-1">
                <a href="{{route('bookings.status',[$booking->id,'avaiable'])}}" class="bg-blue-700 text-white rounded-lg p-1">Avaiable</a>
                <a href="{{route('bookings.status',[$booking->id,'rented'])}}" class="bg-yellow-700 text-white rounded-lg p-1">Rented</a>
                <a href="{{route('bookings.status',[$booking->id,'maintenance'])}}" class="bg-green-800 text-white rounded-lg p-1">Maintenance</a>
                <a href="{{route('bookings.status',[$booking->id,'reserved'])}}" class="bg-green-800 text-white rounded-lg p-1">reserved</a>
            </td>
        </tr>
        @endforeach
</table>


@endsection

















