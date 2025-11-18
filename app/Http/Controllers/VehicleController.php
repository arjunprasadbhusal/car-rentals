<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
 public function index()
{
    // Fetch all vehicles
    $vehicles = Vehicle::all();

    // Apply bubble sort to sort by Price_Per_Day
    $vehicles = $this->bubbleSort($vehicles);

    return view('vehicle.index', compact('vehicles'));
}

private function bubbleSort($vehicles)
{
    $n = count($vehicles);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Bubble sort based on Price_Per_Day (you can change this to any other attribute)
            if ($vehicles[$j]->Price_Per_Day > $vehicles[$j + 1]->Price_Per_Day) {
                // Swap the vehicles
                $temp = $vehicles[$j];
                $vehicles[$j] = $vehicles[$j + 1];
                $vehicles[$j + 1] = $temp;
            }
        }
    }
    return $vehicles;
}

    public function create()
    {
         return view('vehicle.create');
    }
    public function store(Request $request)
    {
        $data= $request->validate([
            'Name'=>'required|string',
            'Model'=>'required',
            'Brand'=>'required',
            'number_plate'=>'required',
            'photopath'=>'required|image', 
            'Price_Per_Day'=>'required',
            'status'=>'required|string',
            'description'=>'required|string',
            'type'=>'required|string',
          ]);
         
          $photoname=time().'.'.$request->photopath->extension();
         $request->photopath->move(public_path('image'),$photoname);
         $data['photopath']=$photoname;
            Vehicle::create($data);
          return redirect()->route('vehicle.index')->with('success','vehicle created sucecessfully');
   
    }
    public function edit($id)
    {
        $vehicles=Vehicle::find($id);
        return view('vehicle.edit',compact('vehicles'));
    }
    public function update(Request $request, $id)
    {
        $data= $request->validate([
          'Name'=>'required|string',
          'Model'=>'required',
          'Brand'=>'required',
          'number_plate'=>'required',
          'photopath'=>'required|image', 
          'Price_Per_Day'=>'required',
          'status'=>'required|string',
          'description'=>'required|string',
          'type'=>'required|string',

    
          ]);
          $vehicles=Vehicle::find($id);
          if($request->hasFile('photopath'))
          {
          $photoname=time().'.'.$request->photopath->extension();
          $request->photopath->move(public_path('image'),$photoname);
          $data['photopath']=$photoname;
    
          //delete old photo
          $oldphoto=public_path('image').'/'.$vehicles->photopath;
          if(file_exists($oldphoto))
          {
            unlink($oldphoto);
          }
          }
          $vehicles->update($data);
    
          return redirect()->route('vehicle.index')->with('success','vehicle upadate  sucecessfully');
        
    }
    public function destroy($id)
    {
       $vehicles =Vehicle::find($id);
        $photo=public_path('image').'/'.$vehicles->photopath;
        if(file_exists($photo))
        {
          unlink($photo);
        }
        $vehicles->delete();

        return redirect()->route('vehicle.index')->with('success','vehicle delete sucecessfully');
    }

    public function Cars()
{
    // Fetch all vehicles
    $cars = Vehicle::all();
    
    // Pass data to the view
    return view('Cars', compact('cars'));
}
public function viewvehicle($id)
{
  $vehicle=Vehicle::find($id);
  $relatedvehicles=Vehicle::where('id','!=',$id)->limit(4)->get();
  $reviews=$vehicle->reviews()->latest()->take(3)->get();
 
  return view('viewvehicle',compact('vehicle','relatedvehicles','reviews'));

}

}


