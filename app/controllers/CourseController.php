<?php

namespace App\Controllers;
use App\Core\App;
use \Support\Facade\{Auth,Validator};
use \App\Models\{Student,Instructor,Course,Invitation};

class CourseController{
    public function store(){
        session_start();
        $status = Validator::validateClassCreation($_POST);
        if($status == true){
            $course = [
                "Courses" => [
                    "instructor_id" => Auth::user()->id,
                    "class_name" => $_POST["name"],
                    "description" => $_POST["description"]
                ]
            ];
            $meet_times = [
                "Meet_Times" => [
                    "monday" => in_array("monday",array_values($_POST["days"])) == true ? 1 : 0,
                    "tuesday" => in_array("tuesday",array_values($_POST["days"])) == true ? 1 : 0,
                    "wednesday" => in_array("wednesday",array_values($_POST["days"])) == true ? 1 : 0,
                    "thursday" => in_array("thursday",array_values($_POST["days"])) == true ? 1 : 0,
                    "friday" => in_array("friday",array_values($_POST["days"])) == true ? 1 : 0,
                    "start_time" => (intval($_POST["start_hour"]) + intval($_POST["start_half"])) . 
                    ":" . ($_POST["start_minute"]),
                    "end_time" => (intval($_POST["end_hour"]) + intval($_POST["end_half"])) . 
                    ":" . $_POST["end_minute"]
                ]
            ];
            Auth::user()->createClass($course,$meet_times);
            redirect('dashboard');
        }else{
            return view('404');
        }
    }
    public function show(){
        $course_id = $_GET["id"];
        $current_students = Course::getStudents($course_id);
        return view('course',compact("current_students"));
    }
    public function update(){
        $course_id = $_GET["id"];

        $current_students = Course::getStudents($course_id);
        $invited = Invitation::findWhere(array(array('course_id','=',$course_id)))->with("Users","to_student_id","id")->get();
        $invited_students = [];
        foreach($invited as $student){
            array_push($invited_students,Student::set($student));
        }

        $to_remove = array_merge($current_students,$invited_students);
        
        $remove_query = [];
        foreach($to_remove as $student){
            $query = explode(" ","id != {$student->id}");
            array_push($remove_query,$query);
        }

        $remove_query[] = array('type','=','0');


        $invitable_students = [];
        
        if($remove_query > 0){
            $students = Student::findWhere($remove_query)->get();
            foreach($students as $student){
                array_push($invitable_students,Student::set($student));
            }
        }
     
        return view('edit',compact("invitable_students","invited_students"));
    }


    public function delete($id){
        
    }
}