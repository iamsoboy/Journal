<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $pageTitle = "About Us";
        $pageDescription = "International Institute for Global Development";
        return view('about', compact('pageTitle', 'pageDescription'));
    }
}
