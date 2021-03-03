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

    public function show(Project $project){
        return view('projects.show',[
            'project' => $project
        ]);

    }
    
    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        //Project::create( request()->only('title','url','description') ); //['title', 'url', 'description', 'approved' => true] 
        Project::create( $fields );
        return redirect()->route('projects.index');
    }

    

}
