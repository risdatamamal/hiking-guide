<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrekController extends Controller
{
    public function index()
    {
        return view('treks');
    }
}
