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

    public function __construct(Character $attacker, Character $defender)
    {
        $this->attacker = $attacker;
        $this->defender = $defender;
    }

    public function fight()
    {
        $report = [];

        try {
            while (true) {
                $this->defender->wound(20);
                $report[] = $this->attacker->getName() . ' frappe ';
                $this->defender->getName();
                $this->attacker->wound(20);
                $report[] = $this->defender->getName() . ' frappe ';
                $this->attacker->getName();

            }
        } catch (\Exception $exception) {
        }
        return $report;

    }

}