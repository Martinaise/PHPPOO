<?php

require_once 'entity/User.php';
function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 1- CLASSE/OBJET/INSTANCE

// instanciation: creation de l'objet a partir de la classe User
$user1 =  new User();

// affectation des valeurs à laproprietes prenom de l'objet user1
$user1->prenom = 'Mohamed';

//affichage de la propriete prenom de l'objet user1
echo "le prenom de l'utilisateur 1 est " . $user1->prenom;

s();

//execution de la methode connect de la classe User
$user1->connect();

// le mot clé private ne peut pas etre utiliser pour l'instanciation elle se limite a la classe (securité du code variable proteger en ecriture)
$user->local = "ne peut pas etre apelez";
echo $user1->local;
