<?php 

namespace Support\Facade;
use \Support\Facade\{Auth};
use \App\Core\App;
class Validator{

    public static function validateClassCreation($data){
        $start = strtotime(intval($data["start_hour"] + $data["start_half"]) . 
                ":" . intval($data["start_minute"]));
        $end = strtotime(intval($data["end_hour"] + $data["end_half"]) . 
        ":" . intval($data["end_minute"]));
        $validTimeRange = ($end-$start > 0) ? true : false;
        
        $data["instructor_id"] = Auth::user()->id;
        $results = App::get("database")->validateClassCreation($data);
        $status = (count($results) == 0 && $validTimeRange) ? true : false;
        return $status;
    }
    public static function validateLogin($data){
        $results = App::get("database")->validateLogin($data);
        $person = count($results) != 0 ? $results : [];
        return $person;
    }
    public static function validateRegister($data){
        $results = App::get("database")->validateRegister($data);
        $status = count($results) == 0 ? true : false;
        return $status;
    }
}