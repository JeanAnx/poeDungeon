<?php 

namespace POE\database;

class Connection
{
    private $connection;
    public function __construct()
    {
        $this->connection = new \PDO('mysql:dbname=dungeon;host=localhost','root','dawan');
    }
    public function getConnection(): \PDO
    {
        return $this->connection;
    }
}