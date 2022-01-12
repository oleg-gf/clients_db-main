<?php
require_once(__DIR__ . "/db.php");

class QueryBuilder{

    public $pdo;

    function __construct(){
            $dbinfo = require __DIR__ . "/dbinfo.php";
            $dsn = "mysql:dbname={$dbinfo['dbname']};host={$dbinfo['dbhost']};charset=UTF8";
        
        try {
            $this->pdo = new \PDO($dsn, $dbinfo['dbuser'], $dbinfo['dbpass']);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        
    }


    function query($query){
        $statement = $this->pdo->prepare($query);
        $result = $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getAllFromTable($table){
        $statement = $this->pdo->prepare("SELECT * FROM `{$table}`");
        $result = $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function searchByCol($table, $col, $like){
        $statement = $this->pdo->prepare("SELECT * FROM `{$table}` WHERE `{$col}`LIKE '{$like}'");
        $result = $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function insert($table, $data){
        $strKeys = '';
        $strValues = '';
        foreach ($data as $key=>$value){
            $strKeys .= '`' . $key . '`,';
            $strValues .= "'" . $value . "',";
        }
        $strKeys = trim($strKeys, '\,');
        $strValues = trim($strValues, '\,');
        $sql = "INSERT INTO `{$table}` ({$strKeys}) VALUES ({$strValues})";
        $statement = $this->pdo->prepare($sql);
        $result = $statement->execute();
        return $result;
        
    }

    function delete($table, $data){
        $str = '';
        foreach ($data as $key=>$value){
            $str .= '`' . $key . "` = '" . $value . "',";
        }
        $str = trim($str, '\,');
        $sql = " DELETE FROM `{$table}` WHERE {$str} ";
        $statement = $this->pdo->prepare($sql);
        $result = $statement->execute();
        return $result;
        
    }  

    function getUserFromTable($table, $user_id){
        $statement = $this->pdo->prepare("SELECT * FROM `{$table}` WHERE ID=". $user_id);
        $result = $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
