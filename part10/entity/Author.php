<?php

// extands nous permet de dire que la classe Author herite de la classe User (heritage simple)
// nous pouvons stipuler que cette classe sera la derniere a heriter de la classe User en utilisant le mot clé "final"
final class Author extends User
{
    private $note;
    private $avis;


    // ont peut egalement etendre le constructeur dans la classe auteur
    public function __construct($nom, $prenom, $age, $email, $note, $avis)
    {
        //PARENT DESIGN LA CLASSE PARENT
        parent::__construct($nom, $prenom, $age, $email);
        $this->note = $note;
        $this->avis = $avis;
    }

    // nous creon une fonction qui fait appelle a l atribut de la classe parente User (nom)
    public function afficherNom()
    {
        // nous pouvons pas acceder a l'atribut de la classe parente (nom) car il est proteger par private
        // pour y avoir acces il faut le mettre en protected pour que celle ci soit accessible au enfants
        //  echo "Nom de l'auteur: " . $this->nom . "<br>"; 

        // sinon passez par le getter.
        echo "Nom de l'auteur: " . $this->getNom() . "<br>";
    }


    // redefinissez la methode connect de la classe parente
    function connect()
    {
        echo "Vous etes connecter et auteur";
    }

    // methode pour les avis et notes

    public function setNote($note)
    {
        $this->note = $note;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function setAvis($avis)
    {
        $this->avis = $avis;
    }

    public function getAvis()
    {
        return $this->avis;
    }
}
