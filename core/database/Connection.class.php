<?php
namespace App\Core;
class Connection{
    

    public static function make($config){
        $connectionInfo = $config["connection"] . ";dbname=" . $config["dbName"];
        $username = $config["username"];
        $password = $config["password"];
        $options = $config["options"]; 
        try{
            $pdo = new \PDO($connectionInfo,$username,$password,$options);
        }
        catch (\PDOException $e){
            die($e->getMessage());
        }
        return $pdo;
        
    }
}