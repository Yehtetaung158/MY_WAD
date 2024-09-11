<?php

class QueryBuilder
{
    public $rawSql = "";
    public $table;
    function __construct($table)
    {
        $this->table = $table;
    }
    public function select(mixed $colums = "*")
    {
        $current = is_array($colums) ? implode(",", $colums) : $colums;
        $this->rawSql .= "SELECT " . $current . " FROM " . $this->table;
        return $this;
    }
    public function where($key, $operator, $value)
    {
        $current = strpos($this->rawSql, "WHERE") ? "AND" : "WHERE";
        $this->rawSql .= " $current $key $operator $value";
        return $this;
    }
    public function orderBy($key, $direction = "ASC")
    {
        $current = strpos($this->rawSql, "ORDER BY") ? " ," : " ORDER BY";
        $this->rawSql .= "$current $key $direction";
        return $this;
    }
    public function limit($limit, $offset=0)
    {
        if (!strpos($this->rawSql, "LIMIT")) {
            $this->rawSql .= " LIMIT $offset,$limit";
        }
        return $this;
    }
    public function sql()
    {
        return $this->rawSql;
    }
}


// class QueryBuilder
// {
//     public $data;
//     public function a()
//     {
//         $this->data .= "a method is work";
//         return $this;
//     }
//     public function b()
//     {
//         $this->data .= "b method is work";
//         return $this;
//     }
//     public function c()
//     {
//         $this->data .= "c method is work";
//         return $this;
//     }
//     public function getData(){
//         return $this;
//     }
// }
