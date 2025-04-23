<?php

class Database
{
    const DSN="mysql:host=localhost;";
    const USER ="root";
    const PASS = "";
    private function connect()
    {
        try{
            $conn = new PDO($dsn, $user, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}
