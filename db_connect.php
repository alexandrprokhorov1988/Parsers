<?php

class DB
{
    public static function getConnect()
    {
        $host = 'localhost';
        $database = 'test';
        $user = 'root';
        $password = '';
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        return $db;
    }
}

