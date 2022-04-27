<?php

namespace App\Models;
use \App\Traits\{ModelTrait};

class Student extends User{
    use ModelTrait;
    public $email;
    public $fname;
    public $lname;

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

       $this->$email = $userObject->email;
       $this->$fname = $userObject->fname;
       $this->$lname = $userObject->lname;

    }
    public function joinClass($class_id){

    }
}



