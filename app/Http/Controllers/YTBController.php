<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YTBController extends Controller
{
    public function index(Request $request)
    {
        return view('ytb');
    }
}
