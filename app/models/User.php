<?php
namespace App\Models;
use \App\Traits\{ModelTrait};
class User extends Model{
    use ModelTrait;
    public $userObject;
    function __construct(array $dependencies){
        $asso = [
            "email" => $dependencies[0],
            "first_name" => $dependencies[1],
            "last_name" => $dependencies[2],
            "password" => $dependencies[3],
            "type" => $dependencies[4]
        ];        

        $arr = ["Users",$asso];
        parent::__construct($arr);

        $user_obj = array_intersect_key($this->modelObject, array_flip( array('email','first_name','last_name') ));
        $this->userObject = $user_obj;
    }

}
