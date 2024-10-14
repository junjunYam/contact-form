<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        // $contact = $request->only(['first-name', 'last-name', 'gender', 'email', 'tel', 'address', 'content']);
        return view('confirm');
    }

    public function store(Request $request)
    {
        // $contact = $request->only(['name', 'email', 'tel', 'content']);
        // Contact::create($contact);
        return view('thanks');
    }
}
