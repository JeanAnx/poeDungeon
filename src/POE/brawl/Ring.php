<?php

namespace POE\brawl;

use POE\database\Character;

class Ring
{
    private $attacker;
    private $defender;
    private $probsAtt;

    public function __construct(Character $attacker, Character $defender)
    {
        $this->attacker = $attacker;
        $this->defender = $defender;
    }

    public function fight()
    {
        $report = new Report($comments = []);

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

                   $report->append($this->attacker->getName() . ' frappe ');
                   $report->append($this->defender->getName() . ' essuie ' . $this->attacker->getAttack() . ' pts de dommages ! ');

               } else {
                   $this->attacker->wound($this->defender->getAttack());
                   $report->append($this->defender->getName() . ' frappe ');
                   $report->append($this->attacker->getName() . ' essuie ' . $this->defender->getAttack() . ' pts de dommages ! ');

               }

                $report->append('<h4>' . $this->attacker->getName() . ' = ' . $this->attacker->getCurrentLife() . ' / ' . $this->defender->getName() . ' = ' . $this->defender->getCurrentLife() . '</h4>');



            }
        } catch (\Exception $exception) {
        }
        return $report->comments;

    }

}