<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Journal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $journals = Journal::whereStatus(true)->with(['category'])->orderByDesc('id')->take(4)->get();
        $articles = Article::whereStatus(true)->get();

        return view('home', compact('journals', 'articles'));
    }
}
