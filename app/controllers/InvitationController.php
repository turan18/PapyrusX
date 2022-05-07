<?php


namespace App\Controllers;
use App\Core\App;
use \Support\Facade\{Auth};
use \App\Models\{Invitation};


class InvitationController{

    public function store(){
        session_start();
        $course_id = $_GET["id"];
        $name = $_GET["name"];

        $instructor_id = Auth::user()->id;
        $students = $_POST["students"];
        $course_id = $_GET["id"];

        $data = [];
        foreach($students as $student_id){
            $obj = array(
                "from_instructor_id" => $instructor_id,
                "to_student_id" => $student_id,
                "course_id" =>$course_id
            );
            array_push($data,$obj);
        }
        Invitation::insert(null,$data);
        redirect("course-edit?name={$name}&id={$course_id}");
    }
    public function delete(){

    }
}