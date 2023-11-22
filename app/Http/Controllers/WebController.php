<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Http;
use App\Models\Faq;

class WebController extends Controller
{

    public function index() {
        return view('web.index');
    }

    public function faq() {
        $faq = Faq::where('status', true)->get();
        return view('web.faq', compact('faq'));
    }

}
