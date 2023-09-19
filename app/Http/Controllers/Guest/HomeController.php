<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Journal;
use Illuminate\Http\Request;
use function Akaunting\Money\toArray;

class HomeController extends Controller
{
    public function index()
    {
        $journals = Journal::whereStatus(true)->with(['category'])->orderByDesc('id')->take(4)->get();
        $articles = Article::whereStatus(true)->get();
        $sliders = Journal::whereStatus(true)->with(['category'])->whereSlider(false)->orderByDesc('id')->take(3)
            ->get()->toArray();

        //dd($sliders['0']);

        return view('home', compact('journals', 'articles', 'sliders'));
    }
}
