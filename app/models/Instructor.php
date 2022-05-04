<?php

namespace App\Models;
use \Support\Model\Traits\{ModelTrait};

class Instructor extends User{
    use ModelTrait;
    protected $table = "Users";
    public $courses = array();
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
        $this->courses = array_merge($this->courses,array($new_course));
    }
    
}
