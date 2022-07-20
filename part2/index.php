<?php

require_once 'entity/User.php';
function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 2- ACCES AUX PROPRIETES

// instanciation: creation de l'objet a partir de la classe User
$user1 =  new User();
$user2 = new User();
$user3 = new User();

// EN FESANT AINSI NOUS NE POUVONS PAS RECUPERER LA VALEUR DE LA PROPRIETE PRENOM DE L'OBJET USER1 DE MANIERE DIRECTE
// CAR LES PROPRIET2 SON PRIVEES
// echo $user1->nom;

// NOUS POUVONS RECUPERER LA VALEUR DE LA PROPRIETE PRENOM DE L'OBJET USER1 DE MANIERE INDIRECTE
// EN UTILISANT LA METHODE RECUPPRENOM()
echo $user1->recupPrenom();

