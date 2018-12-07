<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 07/12/18
 * Time: 12:18
 */

namespace POE\brawl;


use POE\database\Character;

class Ring
{
    private $attacker;
    private $defender;

    public function __construct(Character $attacker , Character $defender)
    {
        $this->attacker = $attacker;
        $this->defender = $defender;
    }

    public function fight()
    {
        while(true) {
            $this->defender;
        }

    }


}