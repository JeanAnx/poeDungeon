<?php 

require __DIR__ . '/../src/autoload.php';

$dungeon = new POE\Dungeon();

$thePath = $_SERVER['REQUEST_URI'];
var_dump($thePath);
echo substr($thePath,1);


$document = $dungeon->reportSituation();

echo $document;