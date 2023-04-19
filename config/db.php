<?php

class Database{
    public static function connect(){
        $db = new mysqli('192.168.101.7', 'root', '123', 'master_store');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}