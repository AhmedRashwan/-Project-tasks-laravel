<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable=['title','description','completed','projects_id'];

    function complete($completed = true){
        $this->update(compact('completed'));
    }
    function incomplete(){
        $this->complete(false);
    }

    function addTask($data){
        Tasks::create($data);
    }
    function project(){
        return $this->belongsTo(Projects::class);
    }
}
