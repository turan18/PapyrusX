<?php

namespace App\Core;


class Router{
    public $routes = [
        "GET" => [],
        "POST" =>[]
    ];
    
    public function get($uri,$endpoint){
        $this->routes["GET"][$uri] = $endpoint;
    }
    public function post($uri,$endpoint){
        $this->routes["POST"][$uri] = $endpoint;
    }


    public static function load($file){
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri,$method){     
        if(array_key_exists($uri,$this->routes[$method])){
            $this->callAction(...explode("@",$this->routes[$method][$uri]));
            // return $this->routes[$method][$uri];
        }else{
            return view("404");
        }
     
    }


    protected function callAction($controller,$action){
        $controller = "App\\Controllers\\${controller}";
        $controller = new $controller;
        if(! method_exists($controller,$action)){
            throw new \Exception("No method for handiling route.");
        }
        return ($controller->$action());
    }


}