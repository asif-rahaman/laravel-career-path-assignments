<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ProjectsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test1', function () {
    $content=file_get_contents(storage_path('data/projects.json'));
    $data=json_decode($content,true);
    //dd($data);
    return view('welcome');
});

Route::get('/', [HomeController::class,'index']);

Route::get('/projects',[ProjectsController::class,'index']);
    // $content=file_get_contents(storage_path('data/projects.json'));
    // $projects=json_decode($content,true);
    // return view('pages.projects',compact('projects'));

Route::get('/resume', [ResumeController::class,'index']);
Route::get('/test', [TestController::class,'language_list','skill_list']);
//Route::get('/test', [TestController::class,'skill_list']);
Route::get('/contact', function () {
    return view('pages.contact');
});