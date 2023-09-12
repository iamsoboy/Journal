<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $pageTitle = "Frequently Asked Questions";
        $pageDescription = "These Frequently Ask Questions (FAQs) are created to provide a better understanding of the
                            IIARD's Publication process and Terms & Conditions. For more information please feel free to
                            send us an email editor[at]iigdjournals.org";
        $faqs = Faq::whereStatus(true)->get();

        return view('faq', compact('faqs', 'pageTitle', 'pageDescription'));
    }
}
