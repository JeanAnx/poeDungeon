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
    public function getMaxLife()
    {
        return $this->life_max;
    }
    public function getCurrentLife()
    {
        return $this->life_current;
    }    
    public function getMaxEnergy()
    {
        return $this->energy_max;
    }
    public function getCurrentEnergy()
    {
        return $this->energy_current;
    }
    public function getAttack()
    {
        return $this->attack;
    }
    public function getDefense()
    {
        return $this->defense;
    }
}