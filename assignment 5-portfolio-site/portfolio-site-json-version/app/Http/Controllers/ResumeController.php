<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ResumeController extends Controller
{

    public function index(){
        $experiences=json_decode(file_get_contents(storage_path('data/experiences.json'))); 
        $educations=json_decode(file_get_contents(storage_path('data/educations.json'))); 
        $skills =json_decode(file_get_contents(storage_path('data/skills.json')));
        $languages=json_decode(file_get_contents(storage_path('data/languages.json'))); 
        

       return view('pages.resume', compact('experiences','educations','skills','languages'));
    }
}
