<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index(){
        $sliders=json_decode(file_get_contents(storage_path('data/sliders.json'))); 
        $about=json_decode(file_get_contents(storage_path('data/about-me.json'))); 
        $urls=json_decode(file_get_contents(storage_path('data/urls2.json'))); 
        // $urls = collect(File::json(storage_path('data/urls.json')));
        return view("pages.home",compact('sliders','about','urls'));
    }
}
