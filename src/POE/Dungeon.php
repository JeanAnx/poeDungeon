<?php 

namespace POE;

use POE\brawl\DiceThrower;
use POE\brawl\Ring;
use POE\database\CharacterFactory;
use POE\database\CharacterLoader;
use POE\database\CharacterManager;
use POE\database\Connection;

class Dungeon
{

    public function brawl()
    {
        $loader = new CharacterLoader(new Connection());

        $attacker = $loader->load(1);
        $defender = $loader->load(3);

        $ring = new Ring($attacker , $defender);

        $ring->fight();

    }

    public function createCharacter()
    {

        /**
         * Si la méthode HTTP est POST, alors le client essaye de transmettre 
         * les données du formulaire. Quand il veut juste l'affichage du form,
         * il requête avec 'GET'.
         */
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if (isset($_POST['type']) && !in_array($_POST['type'], ['warrior','thief','mage'])) {
                // gestion de l'erreur
            }

            // On délègue tout le savoir faire à notre fabrique de personnage
            // pour créer un nouveau personnage à partir d'un type et d'un nom
            $factory = new CharacterFactory();
            $character = $factory->generate($_POST['name'], $_POST['type']);
            echo '<pre>';
            var_dump($character);
            echo '</pre>';

            $manager = new CharacterManager(new Connection());
            $manager->save($character);
        }

        ob_start();
        include __DIR__ . '/../../template/createCharacter.html.php';
        $output = ob_get_clean();
        return $output;
    }

    public function reportSituation()
    {
        /**
         * On passe par un objet intermédiaire pour récupérer notre personnage
         * par anticipation avec le fait qu'il viendra de la base de données
         */
        $loader = new CharacterLoader(new Connection());
        $character = $loader->load(1);
        
        /**
         * Démarrage d'un tampon de sortie / Output Buffet
         * Dans cette "zone" tampon, le html généré par le fichier inclus sera stocké
         * sans partir directement vers le serveur HTTP
         */
        ob_start();
        include __DIR__ . '/../../template/reportSituation.html.php';
        $output = ob_get_clean();
        /**
         * Après avoir écrit le document (capturé dans le tampon de sortie ),
         * on décide de le faire redescendre dans une variable PHP et on nettoie
         * (vide + désactive) le système de tampon
         */
        return $output;
    }

   
}