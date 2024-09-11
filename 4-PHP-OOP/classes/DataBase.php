<?php

class DataBase
{
    protected $conn;

    function __construct()
    {
        $serverName = "localhost";
        $userName = "Yehtetaung";
        $passWord = "12345678";
        $dbName = "wad_school";
        $this->conn = new mysqli($serverName, $userName, $passWord, $dbName);
    }

    function __destruct()
    {
        $this->conn->close();
    }
}
