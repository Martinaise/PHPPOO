<?php


class User
{

    private $nom;

    private $prenom;

    private $age;

    private $email;


    // creation du constructeur exemple

    // public function __construct() //NOM PRECEDE PAR UN UNDERSCORE (executer a chaque fois que l'on cree un objet)
    // { 
    //     echo "Je suis le constructeur executer automatiquement" . "<br>";
    // }

    public function __construct($nom, $prenom, $age, $email)
    { 
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->email = $email;
    }



    function connect()
    {
        echo "Vous etes connecter";
    }

    function deconnect()
    {
        echo "Vous etes deconnecter";
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
