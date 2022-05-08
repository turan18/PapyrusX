<?php 

namespace Support\Facade;
use \App\Core\App;
class Session{

    public static function get($key){
        if(isset($_SESSION[$key])){
            return unserialize($_SESSION[$key]);
        }else{
            return null;
        }
    }
    public static function set($key,$val){
        $_SESSION[$key] = serialize($val);
    }
    public static function clear(){
        session_start();
        session_destroy();
    }
    public static function flash($name,$message){
        setcookie($name,$message,time()+5);
    }
    
}