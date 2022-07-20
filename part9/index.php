<?php

require_once 'entity/User.php';
require_once 'entity/Author.php';
function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 9- HERITAGE OU DERIVATION
// les classe sont les principaux outils de la programmation orientée objet
// ont peut se servire d'une classe existante pour en créé une autre , il poura ajouter ou modifier des proprieter de la nouvelle classe sans affecter la classe parente (derivation ou heritage) PRRENTS -> ENFANT


// 3 TYPE D HERITAGE 
// 1-HERITAGE SIMPLE
// exemple: la classe B herite de la classe A

// 2-HERITAGE MULTINIVAUX
// exemple: la classe C herite de la classe B qui elle meme herite de la classe A

// 3-HERITAGE MULTIPLE
// exemple: la classe C herite de la classe B et de la classe A

// POUR CETTE EXEMPLE NOUS AVONS DEUX CLASSE USER ET AUTHOR , NOUS POUVONS CREER UNE CLASSE AUTHOR QUI HERITE DE LA CLASSE USER ET LA CLASSE ADMIN PEUT AJOUTER DES PROPRIETES OU DES METHODES PROPRE A LA CLASSE AUTHOR

// NOUVELLE INSTANCE DE LA CLASSE AUTHOR
$author1 =  new Author("Dupont", "Jean", "25", "email@gmail.com");
//APPEL DE LA FONCTION AFFICHERNOM DE LA CLASSE AUTHOR
$author1->afficherNom() ;
// VOUS POUVEZ AUSSI REDEFINIR LES METHODE DANS LA CLASSE ENFANT SI VOUS LE SOUHAITEZ 
$author1->connect();

s();
