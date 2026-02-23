<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Header;
use App\Models\Client;

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
        $header = Header::where('is_active', true)->first();
        $clients = Client::where('is_active', true)->get();
    // Upcoming projects for Latest Section
    $upcomingProjects = Project::where('is_upcoming', true)
                        ->latest()
                        ->take(6)
                        ->get();

    // Normal projects for Portfolio Section
    $portfolioProjects = Project::where('is_upcoming', false)
                        ->latest()
                        ->take(6)
                        ->get();

    return view('font-end.home', compact('upcomingProjects', 'portfolioProjects', 'header','clients'));

   
        // return view(view: 'font-end.home');
    }
    public function projects()
    {
        return view('font-end.project'); 
    }
}
