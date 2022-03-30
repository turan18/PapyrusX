<?php 
namespace App\Core;
class QueryBuilder{

    protected $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAllUser($table){
        $query = $this->pdo->prepare("select * from ${table}");
        $query->execute();
        $results = $query->fetchAll(\PDO::FETCH_OBJ);
        return $results;
    }
    public function insert($table,$parameters){
        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)"
            ,$table
            ,implode(',',array_keys($parameters))
            ,implode(', ',array_map(function($col){return ":${col}";},array_keys($parameters)))
        );
        // die(var_dump($sql));
        try{
            $query = $this->pdo->prepare($sql);
            $query->execute($parameters);
        }
        catch (\PDOException $e){
            var_dump($e);
        }
        
    }
    public function addUser($name,$age){
        try{
            $query = $this->pdo->prepare("INSERT INTO Users (Username, Age, Member) VALUES (?,?,?)");
            $query->execute([$name,$age,0]);
            return 1;
        }
        catch (\PDOException $e){
            return $e;
        }
        
    }

}