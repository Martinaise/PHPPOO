<?php


class Produit
{

    private $reference;

    private $nom;

    private $prix;

    // le mot clé static permet de definir une propriete statique propre a la classe toute entiere
    //tous les objet auront toujour la meme valeur de cette propriete
    public static $remise = 20;


    public function __construct($reference, $nom, $prix)
    {
        $this->setReference($reference);
        $this->setNom($nom);
        $this->setPrix($prix);
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
