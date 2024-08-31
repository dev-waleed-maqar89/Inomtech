<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redirectController extends Controller
{
    

    public function about() 
    {

        return view('frontend.about');


    } 

    public function index() 
    {

        return view('frontend.index');


    }

    public function services() 
    {

        return view('frontend.services');


    } 


    
    public function aboutAR() 
    {

        return view('frontend.about-ar');


    } 

    public function indexAR() 
    {

        return view('frontend.index-ar');


    }

    public function servicesAR() 
    {

        return view('frontend.services-ar');


    }
}
