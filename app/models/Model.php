<?php 

namespace App\Models;
use \App\Core\App;
class Model{
    public $modelObject;
    public function __construct(array $dependencies){
       $this->modelObject = App::get('database')->insert($dependencies[0],$dependencies[1]);
    }
}