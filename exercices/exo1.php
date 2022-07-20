<?php
// Exercice 1: classe sans constructeur

//
// Écrivez une classe représentant une ville. Elle doit avoir les propriétés nom, département, région et nombre 
// d’habitants et une méthode affichant « la ville X est dans le département Y de la région Z et a N habitants».
// Créez des objets ville, affectez leurs propriétés, et utilisez la méthode d’affichage.




class Ville
{
    public $nom;
    public $departement;
    public $region;
    public $habitants;

    public function getInfos()
    {

        echo "La ville " . $this->nom . " est dans le département: " . $this->departement . " de la région " . $this->region . " et a " . $this->habitants . " habitants <br>";
    }
}
//Création d'objets ville
$ville_1 = new Ville();
$ville_1->nom = "Strasbourg";
$ville_1->departement = "Bas Rhin";
$ville_1->region = "Grang Est";
$ville_1->habitants = 279284;

$ville_1->getInfos();
