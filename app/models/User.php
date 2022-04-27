<?php
namespace App\Models;
use \Support\Model\Traits\{ModelTrait};
use \Support\Model\{Model};
class User extends Model{
    use ModelTrait;
    public function make(array $dependencies){
        $obj = [
            "email" => $dependencies[0],
            "first_name" => $dependencies[1],
            "last_name" => $dependencies[2],
            "password" => $dependencies[3],
            "type" => $dependencies[4]
        ];        
        $arr = ["Users",$obj];
        $user_obj = array_intersect_key(parent::make($arr), array_flip( array('id','email','first_name','last_name') ));
        return $user_obj;
    }
}