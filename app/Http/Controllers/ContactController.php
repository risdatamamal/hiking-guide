<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'contact' => Contact::where('id', 1)->first(),
        ];
        return view('contact', $data);
    }
}
