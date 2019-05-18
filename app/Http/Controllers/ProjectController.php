<?php

namespace App\Http\Controllers;

use App\Mail\ProjectMails;
use App\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProjectController extends Controller
{

    function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $projects = Projects::where("owner_id",auth()->id())->get();
//        dd(auth()->id());
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
            'description'=>'required|min:3',
        ]);
        $validated['owner_id'] = auth()->id();
        $project = Projects::create($validated);

        \Mail::to("Ahmed.Rashwan2014@yahoo.com")->send(new ProjectMails($project));
        return redirect('/projects');
    }


    public function show(Projects $project)
    {
        abort_if($project->owner_id !== auth()->id(),403);
//        $this->authorize("view",$project);
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

