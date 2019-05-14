<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Projects::all();
        return view('project.index', compact('projects'));
    }

    public function create()
    {
        return view("project.create");
    }


    public function store()
    {

        $validated = request()->validate([
            'title'=>'required|min:3',
            'description'=>'required|min:3'
        ]);
        Projects::create($validated);

        return redirect('/projects');
    }


    public function show(Projects $project)
    {
//        dd($project);
       return view('project.show',compact('project'));
    }


    public function edit(Projects $project)
    {
        return view("project.edit", compact('project'));
    }


    public function update(Projects $project)
    {
        $validated = request()->validate([
                'title'=>'required|min:3',
                'description'=>'required|min:10'
        ]);
        $project->update($validated);
        return redirect('/projects');
    }


    public function destroy(Projects $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}

