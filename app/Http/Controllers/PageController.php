<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
      
      $vehicles=Vehicle::latest()->get();
      return view('welcome',compact('vehicles'));
    }
    public function About()
    {
       return view('About');
    }
   
    
    public function Contact()
    {
       return view('Contact');
    }

    public function viewvehicle($id)
    {
      $vehicle=Vehicle::find($id);
      $relatedvehicles=Vehicle::where('id','!=',$id)->limit(4)->get();
      $reviews=$vehicle->reviews()->latest()->take(3)->get();
      $reviews = review::where('vehicle_id',$id)->latest()->take(3)->get();
      return view('viewvehicle',compact('vehicle','relatedvehicles','reviews'));

    }
    public function Cars()
{
    $cars = Vehicle::all(); // Fetch all vehicles from the database
    return view('Cars', compact('cars')); // Pass $cars to the Blade view
}
public function search(Request $request)
{
    $qry=$request->qry;
    $vehicles= Vehicle::where('brand','like' ,'%'.$qry.'%')->get();
    return view('search ',compact('vehicles','qry'));
}

}
