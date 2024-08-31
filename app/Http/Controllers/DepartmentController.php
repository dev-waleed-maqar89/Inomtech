<?php

namespace App\Http\Controllers;

use App\Http\Traits\ImageTrait;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use ImageTrait;
    public function index()
    {
        return view('admin.departments.index');
    }

    public function create()
    {
        return view('admin.departments.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name_en' => 'required|unique:departments,name_en',
            'name_ar' => 'required|unique:departments,name_ar',
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'required|image',
        ];

        $messages = [
            'name_en.required' => 'Please enter an English name',
            'name_ar.required' => 'Please enter an Arabic name',
            'description_en.required' => 'Please enter an English description',
            'description_ar.required' => 'Please enter an Arabic description',
        ];

        $this->validate($request, $rules, $messages);
        $path = '';
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $img = $this->singleImageUpload($img, 'departments', $request->name_en);
            $path = $img->getPathname();
        }

        $department = Department::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => $path,
        ]);
        return redirect()->route('department.index');
    }
    public function show($id)
    {

        return view('admin.departments.show');
    }
}