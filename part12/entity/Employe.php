<?php


// pour cree une classe abstraite il faut mettre le mot clé abstract avant le mot clé class
// cette classe a pour but d etre utilisé par des classe enfant
abstract class Employe
{

    protected $nom;
    protected $prenom;
    protected $salaire;

// ont ne peut pas cree de constructeur dans une classe abstraite car ont ne peut pas instancier une classe abstraite


// CREATION D UNE METHOD ABSTRAITE
// une methode abstraite doit obligatoirement etre definie dans la classe abstraite
abstract  function obtenirSalaire(); // ceci et la signature de la methode abstraite

// CREATION D UNE METHOD ABSTRAITE
abstract  function prendreConge();

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }
}
