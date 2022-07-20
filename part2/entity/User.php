<?php


class User
{
    //PROPERTIES
    // public : accessible de partout
    private $nom;

    // private: empeche l'acces a la propriete en dehore de la classe
    // nous pouvons acceder a la propriete en dehore de la classe avec la methode getter et en la rendant public
    private $prenom = "mohamed";

    private $age;

    private $email;


    //METHODES
    function connect()
    {
        echo "Vous etes connecter";
    }

    function deconnect()
    {
        echo "Vous etes deconnecter";
    }

    // la methode recupNom() permet de recuperer la valeur de la propriete nom en cours d utilisation
    // le $this designe l objet en cours d utilisation (pseudo variable) user1 ou user2 ou user3
    // en ne mettant pas public devant par default la fonction et public
    // en resumé la methode recupNom() permet de recuperer la valeur nom qui et privée en mettant la fonction en public
    public function recupNom()
    {
        return $this->nom;
    }

    public function recupPrenom()
    {
        return $this->prenom;
    }

    public function recupAge()
    {
        return $this->age;
    }

    public function recupEmail()
    {
        return $this->email;
    }
}
