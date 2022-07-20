<?php

// extands nous permet de dire que la classe Author herite de la classe User (heritage simple)
class Author extends User
{

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
}
