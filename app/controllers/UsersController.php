<?php


namespace App\Controllers;
use App\Core\App;

class UsersController{
    
    public function index(){
        $users = App::get("database")->selectAllUser("Users");
        return view('users',compact('users'));
    }
    public function store(){
        $username = $_POST["username"];
        $age = $_POST["age"];

        App::get("database")->insert("Users",
            [
                "Username" => $username,
                "Age" => $age,
                "Member" =>0
            ]
        );

        redirect('users');
    }

}