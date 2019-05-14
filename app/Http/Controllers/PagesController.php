<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(){
        return view('welcome');
    }

    function about(){
        return view('aboutus');
    }
    function contact(){
        $tasks = ["some","text","here"];
        return view('contact',['tasks'=>$tasks]);
    }
}
