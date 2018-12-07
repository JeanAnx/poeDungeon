<?php 

namespace POE\database;

class Character
{
    private $id;
    private $name;
    private $life_max;
    private $life_current;
    private $energy_max;
    private $energy_current;
    private $attack;
    private $defense;

    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getMaxLife()
    {
        return $this->life_max;
    }
    public function setMaxLife($life_max):void
    {
        $this->life_max = $life_max;
    }

    public function getCurrentLife()
    {
        return $this->life_current;
    }
    public function setCurrentLife($life_current):void
    {
        $this->life_current = $life_current;
    }


    public function getMaxEnergy()
    {
        return $this->energy_max;
    }
    public function setMaxEnergy($energy_max):void
    {
        $this->energy_max = $energy_max;
    }

    public function getCurrentEnergy()
    {
        return $this->energy_current;
    }
    public function setCurrentEnergy($energy_current):void
    {
        $this->energy_current = $energy_current;
    }

    public function getAttack()
    {
        return $this->attack;
    }
    public function setAttack($attack):void
    {
        $this->attack = $attack;
    }

    public function getDefense()
    {
        return $this->defense;
    }
    public function setDefense($defense):void
    {
        $this->defense = $defense;
    }

    public function wound(int $wound)
    {
        $this->life_current -= $wound;
        if (0 > $this->life_current){
            echo $this->name . ' is DEAD';
            throw new \Exception('DEAD');
        }
    }


}