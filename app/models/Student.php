<?php

namespace App\Models;
use \Support\Model\Traits\{ModelTrait};

class Student extends User{
    use ModelTrait;
    protected $table = "Users";
    function __construct($dependencies = null){
       if($dependencies != null){
        $arr = [$dependencies["email"],$dependencies["first_name"],$dependencies["last_name"],$dependencies["password"],0];
        parent::make($arr);
       }     
    }   
    public static function set(array $dependencies){
        $arr = [$dependencies["id"],$dependencies["email"],$dependencies["first_name"],$dependencies["last_name"],0];
        return parent::set($arr);
    }
    public function joinClass($class_id){

    }
}
