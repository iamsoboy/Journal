<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\Manuscript;
use Illuminate\Http\Request;

class ManuscriptController extends Controller
{
    public function index()
    {
        $pageTitle = "Online Manuscript Submission";
        $pageDescription = "Online Article Submission";
        $journals = Journal::whereStatus(true)->get()->pluck('title');
        return view('manuscript', compact('pageTitle', 'pageDescription', ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => ['required', 'string', 'max:120'],
            'surname' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string', 'max:191'],
            'city' => ['required', 'string', 'max:191'],
            'state' => ['required', 'string', 'max:191'],
            'country' => ['required', 'string', 'max:191'],
            'academic_degree' => ['nullable', 'string'],
            'article_name' => ['required', 'string', 'max:191'],
            'journal_type' => ['required', 'string', 'max:191'],
            'document' => ['required', 'file'],
            'payment_reference' => ['nullable', 'string'],
            'message' => ['nullable', 'string', 'max:191'],
        ]);
        Manuscript::create([
            'firstname' => $request->firstname,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address_1' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'academic_degree' => $request->academic_degree,
            'file_name' => $request->article_name,
            'journal' => $request->journal_type,
            'reference' => $request->payment_reference,
            'attachment' => $request->document,
            'comment' => $request->message,
        ]);
        if (request()->has('document')){
            $image = request()->file('document');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/storage');
            $image->move($destinationPath, $name);
        }
        return redirect()->route('manuscript')->with('success_message', 'Thanks for your article submission, We\'ll be in touch!');
    }
}
