<?php 

require __DIR__ . '/../src/autoload.php';

$dungeon = new POE\Dungeon();

/**
 * On définit dans un tableau associatif la liste des pages gérées
 * par l'application. La clé représente le chemin d'URL et la valeur est le
 * nom de la méthode à exécuter
 */

$pages = [
    '/jeu/situation' => 'reportSituation',
    '/create-character' => 'createCharacter'
];


/***
 * Si l'Url demandée n'est pas dans la liste v=> BAM 404
 */
if ( !key_exists($_SERVER['REQUEST_URI'], $pages)) {
    http_response_code(404);
    echo '<h1>404 This is not the page you\'re looking for</h1>';
    die;
}

/**
 * Si l'Url existe bien, on peut appeler la méthode correspondante.
 * Comme le nom de la méthode est stocké dans une variable,
 * on passe par call_user_func pour l'appeler
 */

$document = call_user_func([$dungeon, $pages[$_SERVER['REQUEST_URI']]]);

echo $document;