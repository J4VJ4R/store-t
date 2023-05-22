<?php

// class Database{
//     public static function connect(){
//         $db = new mysqli('192.168.101.7', 'root', '123', 'master_store');
//         $db->query("SET NAMES 'utf8'");
//         return $db;
//     }
// }

class Database{
    public static function connect(){
        $host = 'localhost';
        $port = '5432';
        $dbname = 'master_store';
        $user = 'postgres';
        $password = '123';

        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";

        try {
            $db = new PDO($dsn);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->exec("SET NAMES 'utf8' ");
            return $db;
        } catch (PDOException $e) {
            // manage error of conection
            die('Error of conection: ' . $e->getMessage());
        }
    }

}