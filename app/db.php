<?php

define('LOCALHOST', "localhost");
define('USER', "root");
define('PASS', "parola98");
define('NAME', "tw");

class db
{
    private static $connection;

    public static function getConnection()
    {
        if (self::$connection == null) {
            $connection = new mysqli(LOCALHOST, USER, PASS, NAME);
        } else
            die("nicio baza de date");

        return $connection;
    }
}
