<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;
use Illuminate\Support\Facades\DB;


class projectTaskController extends Controller
{
    function update(Tasks $task){
        request()->has("completed")?$task->complete():$task->incomplete();
        return redirect('/projects/'.$task->projects_id);
    }
    function edit(Tasks $task){

        return view('tasks.edit',compact('task'));
    }

    function show(Tasks $task){
        $project = $task->project();
//        dd(request()->all());
        return view("tasks.show",compact(['task']));
    }

    function store(){
        $task = new Tasks();
        $validated = request()->validate([
           'title'=>'min:5|required',
           'description'=>'min:5|required',
           'projects_id'=>"numeric"
        ]);
        $task->addTask($validated);
       return back();
    }
}
