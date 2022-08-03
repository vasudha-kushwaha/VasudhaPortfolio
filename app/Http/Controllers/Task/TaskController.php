<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendEmail;
// use Illuminate\Support\Facades\Mail\SendEmail;
use Mail;

class TaskController extends Controller
{
    //
    public function index(){
        return view('tasks.taskhome');
    }
    public function Email(){
// ---------------------------
        $details=[
            'title' => "Hello How are you",
            'body' => "Test Mail"
        ];
        Mail::to("vasudha.kush@gmail.com")->send(new SendEmail($details));
        return "Email Sent";
// ---------------------------
//             Mail::send('tasks.taskhome', $data, function($message) use ($user){

//             });
                // Mail::to('vasudha.kush@gmail.com')->send(new SendEmail());
                // if (Mail::failures()) {
                //     return response()->Fail('Sorry! Please try again latter');
                // }
                // else{
                //     return response()->success('Great! Successfully send in your mail');
                // } 

    }
    public function GoogleMapApi(){
        return view('tasks.googlemap');
    }
    public function YouTubeApi(){
        return view('tasks.youtube');
    }
    public function PaymentGateway(){
        return view('tasks.payment');
    }
    public function QRCode(){
        return view('tasks.qr-code');
    }
    public function Captcha(){
        return view('tasks.captcha');
    }
    public function WebpageToPdf(){
        return view('tasks.webtopdf');
    }
    public function ExcelToDatabase(){
        return view('tasks.todatabase');
    }
    public function LoginWithGoogle(){
        return view('tasks.googlelogin');
    }
    public function LoginWithFacebook(){
        return view('tasks.fblogin');
    }
    public function MultiImageUpload(){
        return view('tasks.multipleimage');
    }
    public function GoogleAnalytics(){
        return view('tasks.analytics');
    }
    public function SEO(){
        return view('tasks.seo');
    }
}
