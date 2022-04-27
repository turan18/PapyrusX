<?php 

namespace Support\Model;
use \App\Core\App;
class Model{
    public function make(array $dependencies){
       return App::get('database')->insert($dependencies[0],$dependencies[1]);
    }
}
