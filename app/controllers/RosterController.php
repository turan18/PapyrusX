<?php


namespace App\Controllers;
use App\Core\App;
use \Support\Facade\{Auth};
use \App\Models\{Roster,Invitation};

class RosterController{

    public function store(){
       session_start();
       $course_id = $_POST["course_id"];
       $instructor_id = $_POST["instructor_id"];
       $invitation_id = Invitation::findWhere(array(array('from_instructor_id','=',$instructor_id),
                                            array('to_student_id','=',Auth::user()->id),
                                            array('course_id','=',$course_id)))->get()[0]["id"];

       Auth::user()->acceptInvite($invitation_id,$instructor_id,$course_id);
       redirect('/dashboard');
    }
    public function delete(){
        $course_id = $_GET["id"];
        $name = $_GET["name"];

        $students = $_POST["students"];
        $conditions = [];
        foreach($students as $student){
            $conditions[] = explode(" ","student_id = {$student}");
        }
        Roster::remove(null,$conditions)->get();
    
        redirect("course?name={$name}&id={$course_id}");
    }
}