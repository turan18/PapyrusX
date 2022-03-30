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
}