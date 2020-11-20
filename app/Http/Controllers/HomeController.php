<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function changeLanguage($language)
    {
        Session::put('website_language', $language);
       
        return back();
    }
}
