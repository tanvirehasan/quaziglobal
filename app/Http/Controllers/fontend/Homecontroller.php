<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function about ()
    {
        return view('about');
    }
    
    public function contact ()
    {
        return view('contact');
    }
    
    public function elements ()
    {
        return view('elements');
    }
    
    public function index ()
    {
        return view(view: 'font-end.home');
    }
    public function projects()
    {
        return view('font-end.project'); 
    }
}
