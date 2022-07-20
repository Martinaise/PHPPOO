<?php


class Produit
{

    private $reference;

    private $nom;

    private $prix;


    //proprieter en privee
    private static $remise = 20;


    public function __construct($reference, $nom, $prix)
    {
        $this->setReference($reference);
        $this->setNom($nom);
        $this->setPrix($prix);
    }


// creation du getteur $remise

    public static function getRemise()
    {
        //self veut dire la classe dans laquelle on est
        // fait reference a la classe en cours
        return self::$remise;
    }

    // creation d une fonction qui retournera le nouveau prix apres la remise
    public function getPrixRemise()
    {
        return $this->prix - ($this->prix * self::$remise / 100);
    }


    // modifiert la valeur de la propriete statique $remise

    public static function setRemise($remise)
    {
        self::$remise = $remise;
    }

    public function getReference()
    {
        return $this->reference;
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}
