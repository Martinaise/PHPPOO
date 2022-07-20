<?php


class User{
//PROPERTIES
// public : accessible de partout
public $nom;

public $prenom ;

public $age;

public $email;

// private: empeche l'acces a la propriete en dehore de la classe
private $local;


//METHODES
function connect()
{
    echo "Vous etes connecter";
}

function deconnect()
{
    echo "Vous etes deconnecter";
}






}