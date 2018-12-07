<?php 

namespace POE\database;

class Connection
{
    protected $connection;

    public function __construct()
    {
        $this->connection = new \PDO('mysql:dbname=dungeon;host=localhost', 'root', 'dawan');
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

}