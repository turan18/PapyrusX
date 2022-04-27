<?php

namespace Support\Model\Traits;

class Chainable{
    protected $data;

    public function __construct(){
        $this->data = $data;
    }
    public function findWhere($col,$equivalency){
        //filter through array data
        return $this;
    }
}