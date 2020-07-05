<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // render the view
    public function index() {
        return view('pages.contact-us');
    }

    public function contactUSPost(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
       ContactUS::create($request->all());
       return back()->with('success', 'Thanks for contacting us!');
   }
}
