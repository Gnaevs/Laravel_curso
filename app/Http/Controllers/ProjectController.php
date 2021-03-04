<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;

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

    public function store(SaveProjectRequest $request)
    {      
        //Project::create( request()->only('title','url','description') ); //['title', 'url', 'description', 'approved' => true] 
        Project::create( $request->validate() );
        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validate());

        return redirect()->route('projects.show',$project);
    }

    

}
