<?php

require_once 'entity/Personnels.php';
require_once 'entity/Professeur.php';


function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 13- INTERFACES
// les interfaces sont similaire aux classes abstraites qui ne peuvent pas etre instancier
// les interfaces ne peuvent contenir que des methodes et eventuelement des constantes
// les interface peuvent etre etendu par des classes différentes ont dit (implementation et non heritage)


$Professeur1 = new Professeur("Jean",12,54);

//echo $Professeur1->getNom();// erreur car  il ya des methode abstaite qui son declarer dans l interface

// appel de la fonction calculeSalaire()
echo $Professeur1->calculeSalaire();



