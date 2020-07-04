<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // render the view
    public function index() {
        return view('contact-us');
    }
}
