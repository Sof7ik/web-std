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

    /**
     * Function which return one-dimensional array
     * @param string $query String of query
     * @return array Result of query ['1', '2']
     */
    public static function query($query)
    {
        // $query = htmlentities(self::$mysqli->escape_string($query)); 
        
        $queryResult = self::$mysqli->query($query);
        return $queryResult->fetch_assoc();
    }

    /**
     * Function which return two-dimensional array
     * @param string $query String of query
     * @return array Result of query [['1', '2'], ['3', '4']]
     */
    public static function queryAll($query)
    {
        // $query = htmlentities(self::$mysqli->escape_string($query)); 

        $queryResult = self::$mysqli->query($query);
        return $queryResult->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Functoin which return result of query (true)
     * @param string $query String of query
     * @return bool Result of query (success or unsuccess)
     */
    public static function queryExecute($query)
    {
        // $query = htmlentities(self::$mysqli->escape_string($query));
        return self::$mysqli->query($query);
    }
}
Database::connect();
?>