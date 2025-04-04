<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

namespace App\Http\Controllers;

use App\Models\Review;

use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['user', 'service'])->latest()->paginate(10);
        // dd('hello');
        return view('admin.reviews.index', compact('reviews'));
    }
    public function approve(Review $review)
    {
        $review->update(['status' => 'approved']);
        return back()->with('success', 'Review approved!');
    }

    public function reject(Review $review)
    {
        $review->update(['status' => 'rejected']);
        return back()->with('success', 'Review rejected!');
    }


}
