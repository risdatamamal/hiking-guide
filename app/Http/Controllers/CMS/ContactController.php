<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            $contact = Contact::where('id', 1)->first();;
            return view('pages.cms.contacts.index', compact('contact'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'maps'     => 'required | string ',
            'address'  => 'required | string ',
            'website'  => 'required | string ',
            'email'    => 'required | string ',
            'phone'    => 'required | string ',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
        try {
            $contact = Contact::findOrFail($request->id);
            $contact->maps = $request->maps;
            $contact->address = $request->address;
            $contact->website = $request->website;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->instagram = $request->instagram;
            $contact->facebook = $request->facebook;
            $contact->twitter = $request->twitter;
            $contact->youtube = $request->youtube;
            $contact->whatsapp = $request->whatsapp;
            $contact->linkedin = $request->linkedin;
            $contact->save();

            if ($contact) {
                return redirect('contacts')->with('success', 'Contact updated!');
            } else {
                return redirect('contacts')->with('error', 'Failed to update contact! Try again.');
            }
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }
}
