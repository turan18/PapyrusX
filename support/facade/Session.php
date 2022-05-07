<?php 

namespace Support\Facade;
use \App\Core\App;
class Session{

    public static function get($key){
        return unserialize($_SESSION[$key]);
    }
    public static function set($key,$val){
        $_SESSION[$key] = serialize($val);
    }
    public static function clear(){
        session_destroy();
    }

    
}