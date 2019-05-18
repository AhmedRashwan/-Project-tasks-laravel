<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = ["title","description","owner_id"];
    //



    function tasks(){
        return $this->hasMany(Tasks::class);
    }
}
