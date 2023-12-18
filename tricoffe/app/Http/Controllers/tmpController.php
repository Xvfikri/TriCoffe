<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tmpController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
