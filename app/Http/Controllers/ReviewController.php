<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'review' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        review::create([
            'vehicle_id' => $request->vehicle_id,
            'user_id' => auth()->id(),
            'review' => $request->review,
            'rating' => $request->rating,
        ]);

        return back()->with('success', 'Thank you for your review!');
    }
    public function index()
    {
        $reviews = Review::with('vehicle', 'user')->latest()->paginate(15);
        return view('reviews.index', compact('reviews'));
    }
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully!');    }

}
