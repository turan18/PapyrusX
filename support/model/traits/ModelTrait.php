<?php

namespace Support\Model\Traits;
use \App\Core\App;
use Support\Model\Traits\{Chainable};
trait ModelTrait{
    protected $query = "";

    public static function findByID($id){
        if(property_exists(static::class,"table")){
                $table_name = static::class::$table;
        }else{
            $table_name = (new \ReflectionClass(static::class))->getShortName() . "s";
        }
        return parent::__contstructor(App::get("database")->findByID($table_name,$id));

    }
    public static function getAll(){
        if(property_exists(static::class,"table")){
            $table_name = static::class::$table;
        }else{
            $table_name = (new \ReflectionClass(static::class))->getShortName() . "s";
        }
        return App::get("database")->get("SELECT * FROM ${table_name}");
    }
    public static function findWhere($conditions){
        
        if(count($conditions) > 0){
            $queries = [];
            foreach($conditions as $condition){
                
                $str = implode(' ', $condition);
                array_push($queries,$str);
            }
            $conditions_query = implode(" AND ", $queries);
            
            if(property_exists(static::class,"table")){
                $table_name = static::class::$table;
            }else{
                $table_name = (new \ReflectionClass(static::class))->getShortName() . "s";
            }
            return new Chainable("SELECT * FROM {$table_name} WHERE $conditions_query");
        }
        return $this;        
    }
    public static function insert($table=null,$data){
        
        if($table == null){
            if(property_exists(static::class,"table")){
                $table_name = static::class::$table;
            }else{
                $table_name = (new \ReflectionClass(static::class))->getShortName() . "s";
            }

            $inserts = [];
            foreach($data as $values){
                $insert = array($table_name => $values);
                $inserts[] = $insert;
            }
            return App::get("database")->insertMany($inserts);
        }else{
            return App::get("database")->insertMany($inserts);
        }
    }
    public static function remove($table=null,$conditions){
        $queries = [];
            foreach($conditions as $condition){
                
                $str = implode(' ', $condition);
                array_push($queries,$str);
            }
        $conditions_query = implode(" AND ", $queries);
        error_log(print_r($conditions),true);
        if($table == null){
            if(property_exists(static::class,"table")){
                $table_name = static::class::$table;
            }else{
                $table_name = (new \ReflectionClass(static::class))->getShortName() . "s";
            }
           
            return new Chainable("DELETE FROM {$table_name} WHERE $conditions_query");
        }else{
            return new Chainable("DELETE FROM {$table} WHERE $conditions_query");
        }
    }
    // INstrutor::findWhereWith()
    // Instructor::findWhere()->with("Meet_Times")->get()
}

