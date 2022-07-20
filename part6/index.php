<?php

require_once 'entity/User.php';
function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 6- LE CONSCTRUCTEUR AMELIORATION CONTRAINTES
// la fonction __construct permet d initialiser les attributs de l'objet des sa creation
// elle et utile afin de pouvoir initialiser les attributs de l'objet sans les faire a la main
// elle est executer automatiquement lors de la creation d'un objet (si 3 objet alors s'execute 3 fois)

// instanciation: creation de l'objet a partir de la classe User
// LES VALEURS CORRESPONDE AUX ARGUMENTS DE LA FONCTION CONSTRUCTEUR DE LA CLASSE
$user1 =  new User("Meziani", "Mohamed", 29, "monEmail@gmail.com");
$user2 = new User("Durant","Alex", 78, "sonEmail@gmail.com");
// $user3 = new User("Dupont","Marie", 18, "sonAutreEmailgmail.com"); email invalide

//user1
// nous pouvon recuperer les valeurs des attributs de l'objet avec la methode getNom()
echo $user1->getNom();
s();
echo $user1->getPrenom();
s();
echo $user1->getAge();
s();
echo $user1->getEmail();
s();

//user2
echo $user2->getNom();
s();
echo $user2->getPrenom();
s();
echo $user2->getAge();
s();
echo $user2->getEmail();
s();


