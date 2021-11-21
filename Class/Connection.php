<?php 

class Connection  
{
    public static function con($database)
    {
    try {
       return new PDO('mysql:host='.$database['host'].';dbname='.$database['dbname'].'',$database['user'],$database['password']);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    }
}


?>