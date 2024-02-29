<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function companyProfile()
    {
        return view('company-profile');
    }
    public function whyUs()
    {
        return view('why-us');
    }
    public function services()
    {
        return view('services');
    }
    public function client()
    {
        return view('client');
    }
    public function contact()
    {
        return view('contact');
    }
}
