<?php


namespace App\Controllers;
use App\Core\App;
use \Support\Facade\{Auth};


class PagesController{
    public function home(){
        return view('index');        
    }
    public function register(){
        return view('register');
    }
    public function dashboard(){
        session_start();
        $courses = Auth::user()->getAllClasses();
        return view('dashboard',compact('courses'));
    }
    public function class_creation(){
        return view('class_creation');
    }
}