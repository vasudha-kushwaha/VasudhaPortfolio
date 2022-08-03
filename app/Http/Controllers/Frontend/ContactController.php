<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }
    public function save(Request $request){
        // echo "Hlo";
        // die();
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $contact= new Contact;
        $contact->name=$request['name'];
        $contact->email=$request['email'];
        $contact->subject=$request['subject'];
        $contact->message=$request['message'];
        $contact->save();
        return json_encode(array('status'=> true, 'msg'=> "Message sent successfully"));
        // return redirect('show')->with('message', 'Candidate Details Saved!');
    }
}
