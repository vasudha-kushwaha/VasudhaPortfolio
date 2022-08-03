<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        $review=Review::all();
        return view('Frontend.review', compact('review'));
        // return view('frontend.review');
    } 
    public function saveReview(Request $request){
        // echo "Hlo";
        // die();
        $request->validate([
            'name'=> 'required',
            'country'=> 'required',
            'review' => 'required'
        ]);
        $r= new Review;
        $r->name=$request['name'];
        $r->country=$request['country'];
        $r->review=$request['review'];
        $r->save();
        return json_encode(array('status'=> true, 'msg'=> "Message sent successfully"));
        // return redirect('show')->with('message', 'Candidate Details Saved!');
    }
    public function display(){
        $review=Review::all();
        return view('Frontend/review', compact('review'));
    }

}
