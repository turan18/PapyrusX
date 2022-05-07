<?php

namespace App\Models;
use Support\Model\Traits\{ModelTrait};
use Support\Facade\{Session};
use Support\Model\Traits\{Chainable};
use App\Models\{Course};

class Instructor extends User{
    use ModelTrait;
    protected static $table = "Users";
    function __construct($dependencies = null){
        if($dependencies != null){
            $arr = [$dependencies["email"],$dependencies["first_name"],$dependencies["last_name"],$dependencies["password"],1];
            parent::make($arr);
        } 
    }
    public static function set(array $dependencies){
        $arr = [$dependencies["id"],$dependencies["email"],$dependencies["first_name"],$dependencies["last_name"],1];
        return parent::set($arr);
    }
    public function createClass($course,$meet_times){
        $new_course = new Course($course,$meet_times);
    }
    public function getAllClasses(){
        $f_key = (new \ReflectionClass('\App\Models\Course'))->getDefaultProperties()['foreign_key'];
        $courses = Course::findWhere(array(array('instructor_id','=',$this->id)))->with("Meet_Times",'id',$f_key)->get(); 
    
        $data = [];
        foreach($courses as $course){
            array_push($data,Course::set($course));
        }
        return $data;
    }
    public function sendInvite($student_id,$course_id){
        $data = [
            "from_instructor_id" => $this->id,
            "to_student_id" => $student_id,
            "course_id" => $course_id
        ];
        Instructor::insert("Invitations",$data);
    }
    
}
