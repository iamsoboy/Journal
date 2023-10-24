<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\EditorialBoard;
use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        $pageTitle = "Academic Journals";
        $pageDescription = "All Academic Journals";
        $journals = Journal::whereStatus(true)->with(['category'])->orderByDesc('id')->paginate(8);

        //dd($journals);
        return view('journals.index', compact('pageTitle', 'pageDescription', 'journals'));
    }

    public function show(Journal $journal)
    {
        $articles = $journal->load('articles', 'editorialBoards')->paginate(7);

        return view('journals.show', compact('journal', 'articles'));
    }

    public function editors(Journal $journal)
    {
        $pageTitle = 'Editorial Board:' . $journal->title;

        $editors = EditorialBoard::whereJournalId($journal->id)->get();

        return view('journals.editor', compact('editors', 'pageTitle'));
    }
}
