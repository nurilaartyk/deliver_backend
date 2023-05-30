<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Restauran;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $restaurans = Restauran::all();
        return view('contact')->with(compact('restaurans'));
    }

    public function update(Request $request)
    {
        $restauran = Restauran::where('id', $request->restauran_id)->first();
        if ($restauran->reiting == 0) {
            $restauran->reiting += $request->raiting;
        } else {
            $restauran->reiting = ($request->raiting + $restauran->reiting) / 2;
        }
        $restauran->save();
        Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'number' => $request->number,
            'raiting' => $request->raiting,
            'body' => $request->body,
        ]);
        return redirect()->route('contact.index');
    }
}
