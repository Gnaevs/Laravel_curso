<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        return view('projects.index',[
            'projects' => Project::paginate()
        ]);
    }

    public function show($id){
        // $project = Project::find($id);

        return view('projects.show',[
            'project' => Project::findOrFail($id)
        ]);

    }

}
