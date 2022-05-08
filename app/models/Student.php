<?php

namespace App\Models;
use \Support\Model\Traits\{ModelTrait};

class Student extends User{
    use ModelTrait;
    protected static $table = "Users";
    function __construct($dependencies = null){
       if($dependencies != null){
        $arr = [$dependencies["email"],$dependencies["first_name"],$dependencies["last_name"],$dependencies["password"],0];
        parent::make($arr);
       }     
    }   
    public static function set($dependencies){
        $arr = [$dependencies["id"],$dependencies["email"],$dependencies["first_name"],$dependencies["last_name"],0];
        return parent::set($arr);
    }
    public function getAllClasses(){
        $f_key = (new \ReflectionClass('\App\Models\Course'))->getDefaultProperties()['foreign_key'];
        $courses = Roster::findWhere(array(array('student_id','=',$this->id)))->with("Courses",$f_key,'id')->with("Meet_Times","id",$f_key)->with("Users","instructor_id","id","Courses")->get(); 
    
        $data = [];
        foreach($courses as $course){
            array_push($data,Course::set($course));
        }

        
        return $data;
    }
    public function joinCourse($course_id){
        $data = [
            "course_id" => $course_id,
            "student_id" => $this->id
        ];
        Roster::insert(null,array($data));
    }

    public function removeInvite($id){
        Student::remove("Invitations",array(array("id","=",$id)))->get();
    }

    public function acceptInvite($invitation_id,$instructor_id,$course_id){
        $this->joinCourse($course_id);
        $this->removeInvite($invitation_id);
    }
}
