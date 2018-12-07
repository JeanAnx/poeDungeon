<?php 

namespace POE\database;


class CharacterLoader extends Connection
{

    public function load(int $id): Character
    {
        $statement = $this->connection->prepare('SELECT * FROM characters WHERE id = :id');

        $statement->bindValue(':id', $id, \PDO::PARAM_INT);

        $statement->setFetchMode(\PDO::FETCH_CLASS, Character::class);

        $statement->execute();

        $character = $statement->fetch();

        return $character;
    }
}