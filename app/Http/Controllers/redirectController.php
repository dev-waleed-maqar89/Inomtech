<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class redirectController extends Controller
{


    public function index()
    {

        $lang = session()->get('locale') ?? 'en';
        $departments = Department::all();
        return view('frontend.index-' . $lang, compact('departments'));
    }

    public function about()
    {

        return view('frontend.about');
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



    // language switcher
    public function switchLang($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}