<?php

namespace App\Models;
use \Support\Model\Traits\{ModelTrait};
use \Support\Model\{Model};
class Course extends Model{
    use ModelTrait;

    protected $foreign_key = "course_id";

    public $id;
    public $instructor_id;
    public $instructor_name;
    public $name;
    public $description;
    public $days = [];
    public $start_time; 
    public $end_time; 


    function __construct($course = null,$meet_times = null){
        if($course != null && $meet_times != null){
            $obj = parent::makeMany($course,$meet_times,$this->foreign_key);
            $this->id = $obj[0]["id"];
            $this->instructor_id = $obj[0]["instructor_id"];
            $this->name = $obj[0]["class_name"];
            $this->description = $obj[0]["description"];
            $this->days = array_keys(array_filter($obj[1], function($v, $k) {
                return (($k != 'id' || $k != 'course_id') && $v == 1);
            }, ARRAY_FILTER_USE_BOTH));
            $this->start_time = $obj[1]["start_time"]; 
            $this->end_time = $obj[1]["end_time"]; 
        }
 
    }

    public static function set(array $dependencies){
        unset($dependencies["id"]);
        if(array_key_exists("first_name",$dependencies)){
            $name = $dependencies["first_name"] . " " . $dependencies["last_name"];
        }
        $obj = [
            "id" => $dependencies["course_id"],
            "instructor_id" => $dependencies["instructor_id"],
            "instructor_name" => $name ?? "",
            "name" => $dependencies["class_name"],
            "description" => $dependencies["description"],
            "days" => array_keys(array_filter($dependencies, function($v, $k) {
                return (($k != 'id' || $k != 'course_id') && $v == 1);
            }, ARRAY_FILTER_USE_BOTH)),
            "start_time" => date("h:i A",strtotime($dependencies["start_time"])),
            "end_time" => date("h:i A",strtotime($dependencies["end_time"])),
        ];
        $course = new static();
        $course->id = $obj["id"];
        $course->instructor_id = $obj["instructor_id"];
        $course->instructor_name = $obj["instructor_name"];
        $course->name = $obj["name"];
        $course->description = $obj["description"];
        $course->days = $obj["days"];
        $course->start_time = $obj["start_time"];
        $course->end_time = $obj["end_time"];
        
        return $course;
    }
    public static function getStudents($course_id){
        $students = Roster::findWhere(array(['course_id','=',$course_id]))->with('Users','student_id','id')->get();
        $results = [];
        foreach($students as $student){
            array_push($results,Student::set($student));
        }
        return $results;
    }
}
