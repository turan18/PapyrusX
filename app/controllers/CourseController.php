<?php

namespace App\Controllers;
use App\Core\App;
use \Support\Facade\{Auth,Validator};
use \App\Models\{Instructor};

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
    public function delete($id){
        
    }
}