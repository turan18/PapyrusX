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
        session_start();
        $data = json_decode(file_get_contents('php://input'), true);
        $student_id = Auth::user()->id;
        $instructor_id = $data["instructor_id"];
        $course_id = $data["course_id"];
        $invitation_id = Invitation::findWhere(array(array('from_instructor_id','=',$instructor_id),
                                            array('to_student_id','=',$student_id),
                                            array('course_id','=',$course_id)))->get()[0]["id"];

        Auth::user()->removeInvite($invitation_id);
        
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([""=>"Invitation Removed"]);
    }
}