<?php

class Dbh
{
    function connect()
    {
        try {
            $username = "root";
            $password = "root";
            $dbh = new PDO('mysql:host=localhost;dbname=news_db', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error! " . $e->getMessage() . "<br/>";
            die();
        }
    }

}


?>