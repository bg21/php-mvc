<?php

namespace App;


class Conn
{
    public static function getDb()
    {
        // PDO("mysql:host=localhost;dbname=mvc;charset=utf8", "username", "password");
        return new \PDO("mysql:host=localhost;dbname=mvc;charset=utf8", "mvc", "mvc");
    }



}