<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
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
    
    //Crear proyecto
    public function create()
    {
        return view('projects.create',[
            'project' => new project
        ]
        );
    }
    //Guardar projecto creado
    public function store(SaveProjectRequest $request)
    {      
        //Project::create( request()->only('title','url','description') ); //['title', 'url', 'description', 'approved' => true] 
         Project::create( $request->validated() );
         return redirect()->route('projects.index')->with('status', 'El projecto fue creado con exito');
        
    }

    //Editar projecto
    public function edit(Project $project)
    {
        return view('projects.edit',[
            'project' => $project
        ]);
    }
    
    //Guardar projecto actualizado
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());
        
        // $project->update([
        //     'title' => request('title'),
        //     'url' => request('url'),
        //     'description' => request('description')
        // ]);

        return redirect()->route('projects.show',$project);
        
    }

    public function destroy(Project $project){
        $project->delete();
        
        return redirect()->route('projects.index');
    }

    

}
