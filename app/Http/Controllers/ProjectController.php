<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function __construct()
    {
        // Para hacer el filtro existe "only" y "except"
        // $this->middleware('auth')->only('create', 'edit', 'destroy');
        $this->middleware('auth')->except('index', 'show',);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        //Aqui se guarda el proyecto
        $project = new Project($request->validated() );
        //Asignamos la imagen
        $project->image = $request->file('image')->store('images');
        // se guarda en la basde de datos
        $project->save();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');

        // Esto es sin usar el RequestProject
        /* Proteccion contra la asignacion masiva
        $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);

        Project::create( $fields );

        /*return Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]);*/

        //Es otra manera de registrar los datos
        //return Project::create(request()->all()); pero no es la màs ideal*/
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        
        if( $request->hasFile('image')){

            Storage::delete($project->image);

            $project->fill($request->validated() );

            $project->image = $request->file('image')->store('images');

            $project->save();

            //optimizar la imagen que se guarda
           // Image::make('public/foo.jpg');

        }else {
            $project->update( array_filter($request->validated()) );
        }

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue editado con éxito');

    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);

        $project->delete();
        
        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito');
    }
}
