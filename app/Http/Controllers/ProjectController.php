<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    


    public function index() {

      
    $projects = Project::orderBy('created_at', 'desc')->get();


        return view('admin.projects.index',compact('projects'));


    }



    public function createPage() {

        return view('admin.projects.create');
    }

    public function store(Request $request) {


       $img= time().'.'.$request->image->extension();

        $request->image->storeAs('public/img', $img);







        Project::create([

            'name' => $request->name,
            'content' => $request->content,
            'link' => $request->link,
            'image' => $img,




        ]);
         

        return redirect()->route('project.index');
    }


    public function destroy($id) {

        $project = Project::find($id);

        $project->delete();
        

        return redirect()->back();
    }


}
