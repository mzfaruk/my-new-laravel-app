<?php

namespace App\Http\Controllers;

use App\Models\project;
// use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        //  $projects = Project::latest()->get();
        $projects = Project::latest()->paginate(10);
        // return $projects;
        return view('projects.index', ['projects' => $projects]);
    
            // return 'test';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'name'=>'required',
            'body'=>'required'
        ]);

        $project = new project();
        $project->name = request( key: 'name');
        $project->body = request( key: 'body');
        $project->save();
        
        return redirect(to: '/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */

    public function show(project $project, $id)
    {
        $project = Project::findorFail($id);
        return view('projects.single', ['project'=>$project]);

        // return $project;
        //
        // return $id;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project, $id)
    {
        //
        $project = Project::findorFail($id);
        return view('projects.edit', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project, $id)
    {
        //
        request()->validate([
            'name'=>'required',
            'body'=>'required'
        ]);

        $project = Project::findorFail($id);

        $project->name = request( key: 'name');
        $project->body = request( key: 'body');
        $project->save();
        
        return redirect(to: '/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project, $id)
    {
        //
        $project = Project::findorFail($id);
        $project->delete();
        return redirect( to: '/projects');
    }
}
