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
    public function findWhere($col,$equivalency){

        return new Chainable();
    }
}