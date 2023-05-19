<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::latest()->take(5)->get();
        return view('contact')->with(compact('contact'));
    }

    public function update(Request $request)
    {
        Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'number' => $request->number,
            'raiting' => $request->raiting,
            'body' => $request->body,
        ]);
        return view('contact');
    }
}
