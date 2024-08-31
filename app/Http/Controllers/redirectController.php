<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        App::setLocale($lang);
        return redirect()->back();
    }

    // Show department / Services
    public function showService($slug)
    {
        $name = str_replace('-', ' ', $slug);
        $department = Department::where('name_en', $name)->first();
        if ($department) {
            $projects = $department->projects()->paginate(12);
            return view('frontend.departments.show', compact(['department', 'projects']));
        }

        abort(404);
    }
}