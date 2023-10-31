<?php

namespace App\Models;

use mysqli;

class Models
{

    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;
    protected $connection;
    protected $query;
    protected $table;

    public function __construct()
    {
        $this->coneccion();
    }

    public function coneccion()
    {
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if ($this->connection->connect_error) {
            die("error de coneccion" . $this->connection->connect_error);
        }
    }

    public function query($sql)
    {
        $this->query = $this->connection->query($sql);
        return $this;
    }

    public function first()
    {
        return $this->query->fetch_assoc();
    }
    public function get()
    {
        return $this->query->fetch_all(MYSQLI_ASSOC);
    }

    public function all()
    {
        $sql = "Select * from {$this->table}";
        return $this->query($sql)->get();
    }

    public function find($id)
    {
        $sql = "Select * from {$this->table} where id_categoria = $id";
        return $this->query($sql)->first();
    }

    public function where($column, $value)
    {
        $sql = "Select * from {$this->table} where {$column} = '{$value}'";
        $this->query($sql);
        return $this;
    }

    public function create($data)
    {
        $columns = array_keys($data);
        $columns = implode(',', $columns);

        $values = array_values($data);
        $values = "'" . implode("','", $values) . "'";

        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";
        $this->query($sql);
        return $values;
    }
}
