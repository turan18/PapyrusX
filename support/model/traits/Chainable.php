<?php

namespace Support\Model\Traits;
use App\Core\App;

class Chainable{
    public $query;

    public function __construct($query){
        $this->query = $query;
    }
    public function with($join_table,$key1,$key2,$original_table = null){
        $query_holder = explode("WHERE",$this->query);
        if($original_table == null){
            $original_table = explode(".",array_slice(explode(" ",$query_holder[0]), -2)[0])[0];
        }
        $join = "LEFT JOIN {$join_table} ON {$original_table}.{$key1} = {$join_table}.{$key2}";
        if(count($query_holder)>1){
            $query_holder[0] = $query_holder[0] . $join;
            $final = implode(" WHERE",$query_holder);
            $this->query = $final;
        }else{
            $final = $this->query . $join;
            $this->query = $final;
        }
        return $this;
        
    }
    public function get(){
        return App::get("database")->get($this->query);
    }
}

