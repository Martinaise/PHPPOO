<?php

require_once 'entity/User.php';
function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 4- ASSESSEURS ET MUTATEURS (SETTER & GETTER)
// MUTATEURS ou SETTER : permet d'attribué ou de modifier la valeur d une propriete (attribut)
// ASSESSEURS ou GETTER : permet de recuperer la valeur d une propriete (attribut)


// instanciation: creation de l'objet a partir de la classe User
$user1 =  new User();
$user2 = new User();
$user3 = new User();


//$user1
// setNom() : permet d'attribuer une valeur a l'attribut nom
$user1->setNom('Meziani');
$user1->setPrenom('Mohamed');
$user1->setAge(29);
$user1->setEmail('monEmail@gmail.com');

// getNom(): permet de recuperer la valeur de l'attribut nom
echo $user1->getNom();
s();
echo $user1->getPrenom();
s();
echo $user1->getAge();
s();
echo $user1->getEmail();
s();


//$user2
$user2->setNom('Meziani2');
$user2->setPrenom('Mohamed2');
$user2->setAge(78);
$user2->setEmail('monEmail@gmail.com');

echo $user2->getNom();
s();
echo $user2->getPrenom();
s();
echo $user2->getAge();
s();
echo $user2->getEmail();
s();

// a ce stade toutes les valeurs son accepter  CE N'ES PAS BIEN !!! ont doit verifier les valeurs avant d'accepter