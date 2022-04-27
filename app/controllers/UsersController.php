<?php


namespace App\Controllers;
use \App\Core\App;
use \App\Models\{Student,Instructor};
use \Support\Facade\{Auth};
class UsersController{
    
    public function store(){
        // $fname = $_POST['fname'];
        // $lname = $_POST['lname'];
        // $email = $_POST['email'];
        // $password = $_POST['password'];
        $type = $_POST['type'];
        if($type == "student"){
            $user = new Student($_POST);
        }else{
            $user = new Instructor($_POST);
        }
        Auth::login($user);
        redirect('dashboard');
    }

}