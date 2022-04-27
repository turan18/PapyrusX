<?php

namespace Support\Model\Traits;

trait ModelTrait{
    public static function findByID($id){
        if(property_exists(static::class,"table")){
                $table_name = static::class::$table;
        }else{
            $table_name = static::class + "s";
        }
        return parent::__contstructor(App::get("database")->findByID($table_name,$id));

    }
    public static function getAll(){
        if(property_exists(static::class,"table")){
            $table_name = static::class::$table;
        }else{
            $table_name = static::class + "s";
        }
        return App::get("database")->getAll();
    }
    public static function findWhere($col,$equivalency){
        if(property_exists(static::class,"table")){
            $table_name = static::class::$table;
        }else{
            $table_name = static::class + "s";
        }
        return App::get("database")->findWhere($col,$equivalency);
    }
}