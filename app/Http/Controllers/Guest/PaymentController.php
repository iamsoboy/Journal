<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $pageTitle = "Online Manuscript Payment";
        $pageDescription = "Online Submission Payment Process";
        return view('payment', compact('pageTitle', 'pageDescription'));
    }
}
