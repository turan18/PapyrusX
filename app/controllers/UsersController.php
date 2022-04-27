<?php


namespace App\Controllers;
use \App\Core\App;
use \App\Models\{Student,Instructor};

class UsersController{
    
    public function store(){
        // $fname = $_POST['fname'];
        // $lname = $_POST['lname'];
        // $email = $_POST['email'];
        // $password = $_POST['password'];
        $type = $_POST['type'];
        if($type == "student"){
            $user = new Student($_POST);
        }else{
            $user = new Instructor($_POST);
        }
        var_dump($user);
        // return view('dashboard',compact('user'));
    }


    // public function index(){
    //     $users = App::get("database")->selectAllUser("Users");
    //     return view('users',compact('users'));
    // }
    // public function store(){
    //     $username = $_POST["username"];
    //     $age = $_POST["age"];

    //     App::get("database")->insert("Users",
    //         [
    //             "Username" => $username,
    //             "Age" => $age,
    //             "Member" =>0
    //         ]
    //     );

    //     redirect('users');
    // }

}