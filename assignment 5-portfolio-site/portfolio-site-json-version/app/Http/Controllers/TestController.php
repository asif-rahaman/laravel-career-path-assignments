<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function language_list(){
        $languages=file_get_contents(storage_path('data/languages.json'));
        $languages=json_decode($languages,true);
        return view('pages.test',compact('languages'));
        // return View::make('pages.resume', ['asname' => 'James']);
        //['pages.resume',compact('languages')];
    }
    public function skill_list(){
        $skills=file_get_contents(storage_path('data/skills.json'));
        $skills=json_decode($skills,true);
        return view('pages.test',compact('skills'));
    }
}
