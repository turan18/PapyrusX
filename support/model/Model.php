<?php 

namespace Support\Model;
use \App\Core\App;
class Model{
    public function make(array $dependencies){
       return App::get('database')->insert($dependencies[0],$dependencies[1]);
    }
    public function makeMany($table_1,$table_2,$f_key){
        return App::get('database')->insertWith($table_1,$table_2,$f_key);
    }
}
