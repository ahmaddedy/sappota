<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('faq.index');
    }

    public function json() {
        $data = Faq::all();
        return response()->json([
            'data' => $data
        ]);
    }

    public function add() {
        return view('faq.add');
    }

    public function actionAdd(Request $request) {
        
    }
}
