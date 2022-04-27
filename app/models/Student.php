<?php

namespace App\Models;
use \App\Traits\{ModelTrait};

class Student extends User{
    use ModelTrait;
    public $email;
    public $first_name;
    public $last_name;

    protected static $table = "User";

    function __construct(array $dependencies){
       $arr = [
              $dependencies["email"],
              $dependencies["fname"],
              $dependencies["lname"],
              $dependencies["password"],
              0
            ];
       parent::__construct($arr);
       $this->email = $this->userObject["email"];
       $this->first_name = $this->userObject["first_name"];
       $this->last_name = $this->userObject["last_name"];

    }
    public function joinClass($class_id){

    }
}



