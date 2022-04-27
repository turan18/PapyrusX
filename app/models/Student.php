<?php

namespace App\Models;
use \Support\Model\Traits\{ModelTrait};

class Student extends User{
    use ModelTrait;
    public $id;
    public $email;
    public $first_name;
    public $last_name;

    protected static $table = "User";

    function __construct(array $dependencies){
       $arr = [$dependencies["email"],$dependencies["fname"],$dependencies["lname"],$dependencies["password"],0];
       $obj = parent::make($arr);
       $this->id = $obj["id"];
       $this->email = $obj["email"];
       $this->first_name = $obj["first_name"];
       $this->last_name = $obj["last_name"];

    }
    public function joinClass($class_id){

    }
}



