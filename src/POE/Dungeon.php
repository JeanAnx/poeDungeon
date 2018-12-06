<?php 

namespace POE;

use POE\database\CharacterLoader;
use POE\database\Connection;

class Dungeon
{
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