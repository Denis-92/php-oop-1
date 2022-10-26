<?php

require_once __DIR__ . "/class/Movie.php";

$sala1 = new Movie("Azione");
echo "<p>Genere: " . $sala1->genre . "</p>";

$sala1->setTypeLength(55);

$lengthMovie_sala1 = $sala1->getLength();
echo "<p>Durata: " . $lengthMovie_sala1 . " minuti</p>";

$typeMovie_sala1 = $sala1->getType();
echo "<p>Tipo pellicola: " . $typeMovie_sala1 . "</p>";

?>