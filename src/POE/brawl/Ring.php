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
    private $probs;

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

                $diceThrow = new DiceThrower();
                $dice = $diceThrow->throwDice(100);

                $probsAtt = 50 + ($this->attacker->getAttack() - $this->defender->getDefense());
                echo '<pre>';
                echo 'Probabilités: ';
                var_dump($probsAtt);

                echo 'Le dé = ';
                echo $dice;

                echo '</pre>';
               if ($dice <= $probsAtt) {
                   $this->defender->wound($this->attacker->getAttack());
                   $report[] = $this->attacker->getName() . ' frappe ';
                   $report[] = 'Dommages = ' . $this->attacker->getAttack();

               } else {
                   $this->attacker->wound($this->defender->getAttack());
                   $report[] = $this->defender->getName() . ' frappe ';
                   $report[] = 'Dommages = ' . $this->defender->getAttack();

               }

            }
        } catch (\Exception $exception) {
        }
        return $report;

    }

}