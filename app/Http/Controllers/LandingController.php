<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.landing.index', [
            'title' => 'Home',
        ]);
    }
}
