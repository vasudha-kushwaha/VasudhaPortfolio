<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class HomeController extends Controller
{
    public function index(){
        $review=Review::all();
        return view('Frontend.index', compact('review'));
        // return view('frontend.index');
    }
}
