<?php

namespace App\Models;
use \Support\Model\Traits\{ModelTrait};
use \Support\Model\{Model};
class Invitation extends Model{
    use ModelTrait;
    
    public $student_id;
    public $instructor_id;
    public $instructor_name;
    public $course_id;
    public $course_name;
    public $course_description;
    public static function set(array $dependencies){
        $invite = new static();
        $invite->student_id = $dependencies["to_student_id"];
        $invite->instructor_id = $dependencies["from_instructor_id"];
        $invite->instructor_name = $dependencies["first_name"] . " " . $dependencies["last_name"];
        $invite->course_id = $dependencies["course_id"];
        $invite->course_name = $dependencies["class_name"];
        $invite->course_description = $dependencies["description"];
        return $invite;
    }
}