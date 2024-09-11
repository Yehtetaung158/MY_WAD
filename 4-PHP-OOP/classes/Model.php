<?php

class Model extends DataBase
{
    private $rawSql = "";
    protected $table;
    // function __construct($table)
    // {
    //     $this->table = $table;
    // }
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
    public function limit($limit, $offset = 0)
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
    public function first()
    {
        $query = $this->conn->query($this->rawSql);
        $row = $query->fetch_object();
        return $row;
    }

    public function all()
    {
        $query = $this->conn->query($this->rawSql);
        $rows = [];
        while ($row = $query->fetch_object()) {
            $rows[] = $row;
        }
        // $row=$query->fetch_object();
        return $rows;
    }
}
