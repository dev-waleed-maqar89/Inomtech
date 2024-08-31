<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\CreateProjectRequest;
use App\Http\Traits\ImageTrait;
use App\Models\Department;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    use ImageTrait;

    public function index()
    {


        $projects = Project::orderBy('created_at', 'desc')->get();


        return view('admin.projects.index', compact('projects'));
    }



    public function create()
    {
        $departments = Department::all();
        return view('admin.projects.create', compact('departments'));
    }

    public function store(CreateProjectRequest $request)
    {
        $path = '';
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $img = $this->singleImageUpload($img, 'projects', $request->name_en);
            $path = $img->getPathname();
        }

        $project =  Project::create([

            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
            'department_id' => $request->department_id,
            'link' => $request->link,
            'image' => $path,
        ]);

        return redirect()->route('project.index');
    }


    public function destroy($id)
    {

        $project = Project::find($id);
        $image = public_path($project->image);
        $this->destroyImage($image);

        $project->delete();


        return redirect()->back();
    }
}