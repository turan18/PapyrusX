<?php

use \Support\Facade\{Auth};

function auth(){
    return Auth::user();
}

function view($view,$data=[]){
    extract($data);
    return require "app/views/${view}.view.php";
}

function redirect($path){
    header("Location: ${path}");
}
