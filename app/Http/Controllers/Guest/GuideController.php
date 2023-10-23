<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index()
    {
        $pageTitle = "Article Submission Guidelines";

        return view('guideline', compact('pageTitle'));
    }
}
