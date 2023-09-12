<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $pageTitle = "International Editorial Board Members";
        $pageDescription = "Below is a list of International Editorial Board Members";
        $boardMembers = Member::whereStatus(true)->get();
        return view('team', compact('boardMembers', 'pageTitle', 'pageDescription'));
    }
}
