<?php
class Database
{
    public $conn;

    public function __construct()
    {
        // PAKSA koneksi langsung (tanpa config.php dulu)
        $this->conn = new mysqli("localhost", "root", "", "latihan_oop");

        if ($this->conn->connect_error) {
            die("DB ERROR: " . $this->conn->connect_error);
        }
    }

    public function escape($value)
    {
        return $this->conn->real_escape_string($value);
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }
}
