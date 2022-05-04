<?php 
namespace App\Core;
use \App\Trait\{Chainable};
class QueryBuilder{

    protected $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function insert($table,$parameters){
        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)"
            ,$table
            ,implode(',',array_keys($parameters))
            ,implode(', ',array_map(function($col){return ":${col}";},array_keys($parameters)))
        );
        $retrieve = sprintf("SELECT * from {$table} WHERE id = LAST_INSERT_ID()");
        try{
            $query = $this->pdo->prepare($sql);
            $retrieveQuery = $this->pdo->prepare($retrieve);
            $query->execute($parameters);
            $retrieveQuery->execute();
            $obj = $retrieveQuery->fetch(\PDO::FETCH_ASSOC);
            return $obj;
        }
        catch (\PDOException $e){
            var_dump($e);
        }
    }
    public function insertWith($table_1,$table_2,$f_key){
        
        $data = $this->insert(array_key_first($table_1),reset($table_1));
        $table_2 = [
            array_key_first($table_2) => array($f_key => $data["id"]) + $table_2[array_key_first($table_2)]
        ];
        $final = $this->insert(array_key_first($table_2),reset($table_2));

        return [$data,$final];
        
    }
    public function insertMany($data){
        foreach($data as $table_name=>$values){
            $this->insert($table_name,$values);
        }
    }
    
    public function validateClassCreation($data){
        $sql = "SELECT * FROM Courses where instructor_id = :instructor_id AND class_name = :class_name";
        $query = $this->pdo->prepare($sql);
        $query->bindParam(":instructor_id",$data["instructor_id"]);
        $query->bindParam(":class_name",$data["name"]);
        $query->execute();
        
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function createClass($data){
        $this->insert();
        $this->insert();
    }
    public function validateLogin($data){
        $sql = "SELECT id, email, first_name, last_name FROM Users WHERE email = :email AND password = :password AND type = :type";
        $query = $this->pdo->prepare($sql);
        $query->bindParam(":email",$data["email"]);
        $query->bindParam(":password",$data["password"]);
        $query->bindParam(":type",$data["type"]);
        $query->execute();

        $results = $query->fetchAll(\PDO::FETCH_ASSOC);
        return (count($results) > 0 )? $results[0] : [];

    }
    public function validateRegister($data){
        $sql = "SELECT * FROM Users WHERE email = :email AND type = :type";
        $query = $this->pdo->prepare($sql);
        $query->bindParam(":email",$data["email"]);
        $query->bindParam(":type",$data["type"]);
        $query->execute();
        
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function findWhere($col,$equivalency){

        return new Chainable();
    }
}