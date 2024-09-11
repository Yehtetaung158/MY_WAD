<?php

class Db
{
    public $conn;

    function __construct()
    {
        $serverName = "localhost";
        $userName = "Yehtetaung";
        $passWord = "12345678";
        $dbName = "wad_school";
        $this->conn = new mysqli($serverName, $userName, $passWord, $dbName);
    }

    public function first($sql)
    {
        $query = $this->conn->query($sql);
        $row = $query->fetch_object();
        return $row;
    }

    public function all($sql)
    {
        $query = $this->conn->query($sql);
        $rows = [];
        while ($row = $query->fetch_object()) {
            $rows[] = $row;
        }
        // $row=$query->fetch_object();
        return $rows;
    }

    function __destruct()
    {
        $this->conn->close();
    }
}
