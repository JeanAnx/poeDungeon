<?php

namespace POE\database;

class CharacterManager extends Connection
{

    public function save(Character $character)
    {
        $statement = $this->connection->prepare(
            'INSERT INTO characters 
            (name, life_max , life_current , energy_max , energy_current , defense, attack)
            values (:name, :lmax, :lcurr, :emax, :ecurr, :def, :att )
            ');

        $statement->bindValue('name', $character->getName());
        $statement->bindValue('lmax', $character->getMaxLife());
        $statement->bindValue('lcurr', $character->getCurrentLife());
        $statement->bindValue('emax', $character->getMaxEnergy());
        $statement->bindValue('ecurr', $character->getCurrentEnergy());
        $statement->bindValue('def', $character->getDefense());
        $statement->bindValue('att', $character->getAttack());

        try {
            $statement->execute();
        }
        catch(\PDOException $e) {
           var_dump($e->getMessage());
        }
    }

}