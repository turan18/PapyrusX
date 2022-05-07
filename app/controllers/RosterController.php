<?php


namespace App\Controllers;
use App\Core\App;
use \Support\Facade\{Auth};
use \App\Models\{Roster};

class RosterController{

    public function store(){
       
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