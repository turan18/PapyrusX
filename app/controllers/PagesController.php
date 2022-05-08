<?php


namespace App\Controllers;
use App\Core\App;
use \Support\Facade\{Auth};
use \App\Models\{Invitation};


class PagesController{
    public function home(){
        return view('index');        
    }
    public function register(){
        return view('register');
    }
    public function dashboard(){
        session_start();
        if(Auth::user() != null){
            $courses = Auth::user()->getAllClasses();
            $user = Auth::user();
            if($user->type == 0){
                $invites = Invitation::findWhere(array(array('to_student_id','=',$user->id)))->with("Courses","course_id","id")->with("Users","instructor_id","id","Courses")->get();
                $invitations = [];
                foreach($invites as $invite){
                    $invitations[] = Invitation::set($invite);
                }
                return view('dashboard',compact("courses","invitations"));
            }else{
                return view('dashboard',compact('courses'));
            }
        }else{
            redirect('login');
        }

  
    }
    public function class_creation(){
        session_start();
        if(Auth::user() != null){
            return view('class_creation');
        }else{
            redirect('login');
        }
    }
}