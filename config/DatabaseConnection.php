<?php

class DatabaseConnection
{
    public function __construct()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        if ($conn->connect_error)
        {
            die('Database Connection failed');
        }
        echo "Database connected successfully";
        return $this->conn = $conn;
    }
}
?>
