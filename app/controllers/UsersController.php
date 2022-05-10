<?php


namespace App\Controllers;
use \App\Core\App;
use \App\Models\{Student,Instructor};
use \Support\Facade\{Auth,Validator,Session};
class UsersController{
    
    public function store(){
        $_POST["type"] = $_POST["type"] == "student" ? 0 : 1; 
        $status = Validator::validateRegister($_POST);
        if($status == true){
            $type = $_POST["type"];
            if($type == "student"){
                $user = new Student($_POST);
            }else{
                $data = 
                $user = new Instructor($_POST);
            }
            Auth::login($user);
            redirect('dashboard');
        }else{
            Session::flash("Error","Registration failed.");
            redirect('/register');
        }
  
    }
    public function delete($id){
        
    }

}