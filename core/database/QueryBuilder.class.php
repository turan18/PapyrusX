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
        // die(var_dump($sql));
        try{
            $query = $this->pdo->prepare($sql);
            $query->execute($parameters);
            return $query->fetchAll();
        }
        catch (\PDOException $e){
            var_dump($e);
        }
    }
    public function findWhere($col,$equivalency){


        return new Chainable();
    }
}