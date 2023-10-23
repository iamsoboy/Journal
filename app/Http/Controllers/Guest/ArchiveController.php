<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Journal;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function current(Journal $journal)
    {
        $journal->load('articles')->get();
        $newJournals = collect([]);
        //dd($journal);
        return view('archive', compact('journal', 'newJournals'));
    }

    public function archive(Journal $journal)
    {
        //$journals = Journal::whereTitle($journal->title)->with('articles')->orderByDesc('id')->get()->groupBy('issue');

        $newJournals = Article::where('journal_id', $journal->id)->get()->groupBy(function ($item) {
            return $item->journal->issue;
        });

        //dd($articles);

//        $newJournals = $journals->map(function ($items, $key) {
//            foreach ($items as $item) {
//                return $item->articles;
//            }
//        });

        //dd($newJournals);

        return view('archive', compact('newJournals', 'journal'));
    }
}
