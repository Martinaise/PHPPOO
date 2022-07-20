<?php

require_once 'entity/Employe.php';

function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 11- CLASSES ABSTRAITES

// les classes abstraites sont des classes qui ne peuvent pas etre instancier directement
// doit obligatoirement etre etendue pour pouvoir etre utiliser
// une methode abstraite et une methode dont seulement sa signature est declaree d
// l interet et de donné un cadre plus strict pour les classes qui en heritent


// exemple cron une classe employe

//essayon de cree une nouvelle employee

 $employe1 = new Employe(); // nous avont une erreur