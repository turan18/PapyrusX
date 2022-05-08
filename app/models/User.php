<?php
namespace App\Models;
use \Support\Model\Traits\{ModelTrait};
use \Support\Model\{Model};
class User extends Model{
    use ModelTrait;
    public $id;
    public $email;
    public $first_name;
    public $last_name;
    public $type;

    public function make(array $dependencies){
        $obj = [
            "email" => $dependencies[0],
            "first_name" => $dependencies[1],
            "last_name" => $dependencies[2],
            "password" => password_hash($dependencies[3],PASSWORD_BCRYPT),
            "type" => $dependencies[4]
        ];

        $arr = ["Users",$obj];
        $user_obj = array_intersect_key(parent::make($arr), array_flip( array('id','email','first_name','last_name','type') ));
        $this->id = $user_obj["id"];
        $this->email = $user_obj["email"];
        $this->first_name = $user_obj["first_name"];
        $this->last_name = $user_obj["last_name"];
        $this->type = $user_obj["type"];
    }
    public static function set(array $dependencies){
        $obj = [
            "id" => $dependencies[0],
            "email" => $dependencies[1],
            "first_name" => $dependencies[2],
            "last_name" => $dependencies[3],
            "type" => $dependencies[4]
        ];
        $user = new static();
        $user->id = $obj["id"];
        $user->email = $obj["email"];
        $user->first_name = $obj["first_name"];
        $user->last_name = $obj["last_name"];
        $user->type = $obj["type"];
        return $user;
    }
}