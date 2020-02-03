<?php
class Database
{
    private static $mysqli;

    public static function connect()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'business_card_college';

        self::$mysqli = new mysqli($host, $user, $password, $database);
    }

    // Запрос, который возвращает одномерный массив
    public static function query($query)
    {
        // $query = htmlentities(self::$mysqli->escape_string($query)); 
        
        $queryResult = self::$mysqli->query($query);
        return $queryResult->fetch_assoc();
    }

    // Запрос, который возвращает двумерный массив
    public static function queryAll($query)
    {
        // $query = htmlentities(self::$mysqli->escape_string($query)); 

        $queryResult = self::$mysqli->query($query);
        return $queryResult->fetch_all(MYSQLI_ASSOC);
    }

    public static function queryExecute($query)
    {
        // $query = htmlentities(self::$mysqli->escape_string($query));
        return self::$mysqli->query($query);
    }
}
Database::connect();
?>