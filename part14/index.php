<?php
// toujours dans cette ordre inclure les interfaces avant les classes
require_once 'entity/Personnels.php';
require_once 'entity/Fonctionnaire.php';
require_once 'entity/Professeur.php';


function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 14- INTERFACES (suite) implementations multiple
// les interfaces sont similaire aux classes abstraites qui ne peuvent pas etre instancier
// les interfaces ne peuvent contenir que des methodes et eventuelement des constantes
// les interface peuvent etre etendu par des classes différentes ont dit (implementation et non heritage)


$Professeur1 = new Professeur("Jean",12,54);

//echo $Professeur1->getNom();// erreur car  il ya des methode abstaite qui son declarer dans l interface

// appel de la fonction passerExamen();
echo $Professeur1->passerExamen();


