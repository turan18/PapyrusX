<?php 

namespace Support\Facade;
use \App\Core\App;
use Support\Facade\{Session};
class Auth{

    public static function login($user){
        session_start();
        Session::set('user',$user);
    }
    public static function logout(){
        Session::clear();
    }
    public static function user(){
        // session_start();
        return Session::get('user');
    }
   
    
}