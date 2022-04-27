<?php 

namespace Support\Facade;

class Auth{

    public static function login($user){
        session_start();
        $_SESSION['user'] = serialize($user);
    }
    public static function logout(){
        session_destroy();
    }
    public static function user(){
        return unserialize($_SESSION['user']);
    }
    
}