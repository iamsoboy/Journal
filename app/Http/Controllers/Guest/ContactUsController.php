<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        $pageTitle = "Contact Us";
        $pageDescription = "You can send us an email using the below Contact Form. Thanks";
        return view('contact', compact('pageTitle', 'pageDescription'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        //Send Email
        Mail::to('iamsoboy@gmail.com')->send(new ContactForm($data));

        return redirect()->route('contact-us')->with('success_message', 'Thanks for your message, We\'ll be in touch!');
    }
}
