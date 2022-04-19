<?php


namespace App\Controllers;
use App\Core\App;

class PagesController{


    public function home(){
        return view('index');        
    }
    public function register(){
        return view('register');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function class_creation(){
        return view('class_creation');
    }
}