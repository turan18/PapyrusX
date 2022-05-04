<?php

namespace App\Models;
use \Support\Model\Traits\{ModelTrait};
use \Support\Model\{Model};
class Course extends Model{
    use ModelTrait;

    protected $foreign_key = "course_id";

    public $id;
    public $instructor_id;
    public $name;
    public $description;
    public $days = [];
    public $start_time; 
    public $end_time; 

    function __construct($course,$meet_times){
        $obj = parent::makeMany($course,$meet_times,$this->foreign_key);
        // echo "THIS SI TEH TREURJEKRE";
        // echo "SJDALJSDLJASDLK";
        // print_r($obj[1]);
        $this->id = $obj[0]["id"];
        $this->instructor_id = $obj[0]["instructor_id"];
        $this->name = $obj[0]["class_name"];
        $this->description = $obj[0]["description"];
        $this->days = array_keys(array_filter($obj[1], function($v, $k) {
            return (($k != 'id' || $k != 'course_id') && $v == 1);
        }, ARRAY_FILTER_USE_BOTH));
        $this->start_time = $obj[1]["start_time"]; 
        $this->end_time = $obj[1]["end_time"]; 
    }
}
