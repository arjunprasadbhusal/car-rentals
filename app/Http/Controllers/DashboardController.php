<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\review;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function index()
{

    $totalvehicle = Vehicle::count();
    $totalbooking = Bookings::count();
    $totalusers = User::count();
    $totalreviews = review::count();
    $completedbooking = Bookings::where('status','completed')->count();
    $totalcancel = Bookings::where('status','cancelled')->count();
    $pendingbooking = Bookings::where('status','Pending')->count();

    // For Products
    $allvehicle = Vehicle::all();
    $bookings = [];
    foreach($allvehicle as $vehicle)
    {
        $bookings[] = Bookings::where('vehicle_id',$vehicle->id)->count();
    }
    $allvehicle = $allvehicle->pluck('name')->toArray();
    

    return view('dashboard',compact('totalvehicle','totalbooking','totalusers','completedbooking','pendingbooking','totalcancel','allvehicle','bookings','totalreviews'));
}


}



