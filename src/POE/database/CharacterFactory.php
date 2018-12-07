<?php 

namespace POE\database;

class CharacterFactory
{
    const TYPES = [
        'warrior' => [
            'life' => 200,
            'energy' => 100,
            'attack' => 25,
            'defense' => 20,
        ],
        'thief' => [
            'life' => 150,
            'energy' => 120,
            'attack' => 20,
            'defense' => 30,
        ],
        'mage' => [
            'life' => 100,
            'energy' => 200,
            'attack' => 15,
            'defense' => 10,
        ],
    ];

    public function generate(string $name , string $type)
    {
        /**
         * Si on envoie une classe qui n'existe pas dans la const de classe 'Types',
         * on envoie un message d'erreur, on lance une exception qui stoppe le traitement
         */
        if (!key_exists($type,self::TYPES)) {
            throw new \Exception('Type of character ' . $type . ' unknown');
        }

        $character = new Character();
        $character->setName($name);
        $character->setMaxLife(self::TYPES[$type]['life']);
        $character->setCurrentLife(self::TYPES[$type]['life']);
        $character->setMaxEnergy(self::TYPES[$type]['energy']);
        $character->setCurrentEnergy(self::TYPES[$type]['energy']);
        $character->setAttack(self::TYPES[$type]['attack']);
        $character->setDefense(self::TYPES[$type]['defense']);

        return $character;

    }
}