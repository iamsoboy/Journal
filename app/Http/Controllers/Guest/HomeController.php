<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Journal;
use App\Models\Slider;
use Illuminate\Http\Request;
use function Akaunting\Money\toArray;

class HomeController extends Controller
{
    public function index()
    {
        $journals = Journal::whereStatus(true)->with(['category', 'articles'])->orderByDesc('id')->take(4)->get();
        $journalTitles = Journal::whereStatus(true)->with('articles')->orderByDesc('id')->get();
        $articles = Article::whereStatus(true)->get();
        $sliders = Slider::whereStatus(true)->orderByDesc('id')->take(5)->get();

        return view('home', compact('journals', 'journalTitles', 'articles', 'sliders'));
    }
}
