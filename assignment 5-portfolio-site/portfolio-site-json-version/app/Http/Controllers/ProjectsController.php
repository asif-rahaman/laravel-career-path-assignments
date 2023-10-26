<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects=file_get_contents(storage_path('data/projects.json'));
        $projects=json_decode($projects,true);
        return view('pages.projects',compact('projects'));
    }
}
