<?php

namespace App\Controllers;
use App\Core\App;
use \Support\Facade\{Auth,Validator,Session};
use \App\Models\{Student,Instructor};

class SessionController{

    public function store(){ 
        $person = Validator::validateLogin($_POST);
        if(count($person) > 0){
            if($_POST['type'] == '0'){
                $user = Student::set($person);
            }else{
                $user = Instructor::set($person);
            }
            Auth::login($user);
            redirect('dashboard');
        }else{
            Session::flash("Error","Login Failed");
            redirect('login'); 
        }
    }
    public function delete(){
        Auth::logout();
        redirect('login');
    }
}