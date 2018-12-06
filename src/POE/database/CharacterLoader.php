<?php 

namespace POE\database;

class CharacterLoader
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function load($id)
    {

        $statement = $connection->prepare('SELECT * FROM characters WHERE id = :id');

        $statement->bindValue(':id', $id, \PDO::PARAM_INT);

        $statement->setFetchMode(\PDO::FETCH_CLASS, Character::class);

        $statement->execute();

        $character = $statement->fetch();

        return $character;
    }
}