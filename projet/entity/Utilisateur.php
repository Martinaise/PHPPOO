<?php


class Utilisateur
{

    // variable qui va contenir les erreur eventuelle
    private $erreurs = [];

    private $id;

    private $nom;

    private $prenom;

    private $tel;

    private $email;


    // creation de constantes d invalidité
    const NOM_INVALIDE = 1;
    const PRENOM_INVALIDE = 2;
    const EMAIL_INVALIDE = 3;


    // creation du constructeur de
    public function __construct(array $donnees)
    {
        // ont passe la fonction hydrater au constructeur si  la variable donnees n es pas vide
        // utile pour eviter d ecrire chaque setteur dans le constructeur
        if (!empty($donnees)) {
            $this->hydrater($donnees);
        }
    }

    // creation d une fonction hydrater quon verra a la fin 
    // cette fonction sert a hydrater les données de l utilisateur c'est a dire de remplir les attributs de l utilisateur
    public function hydrater($donnees)
    {
        // ont parcour les données
        foreach ($donnees as $attribut => $valeur) {
            // ont cree une variable qui va contenir la concatenation du mot 'set' + le nom de l attribut avec la premiere letrre en majuscule grace a ucfirst()
            $methodeSetters = 'set' . ucfirst($attribut);
            $this->$methodeSetters($valeur);
        }
    }

    // creation des setters
    public function setId($id)
    {
        // verification: si l id n' es pas vide
        if (!empty($id)) {
            $this->id = (int) $id;
        }
    }

    public function setNom($nom)
    {
        if (!empty($nom) && is_string($nom)) {
            $this->nom = $nom;
        } else {
            // self fait reference a la classe
            // si le paramettre n'es pas une chaine de carractere on ajoute une erreur dans notre tableau d'erreur
            $this->erreurs[] = self::NOM_INVALIDE;
        }
    }

    public function setPrenom($prenom)
    {
        if (!empty($prenom) && is_string($prenom)) {
            $this->prenom = $prenom;
        } else {
            // self fait reference a la classe
            // si le paramettre n'es pas une chaine de carractere on ajoute une erreur dans notre tableau d'erreur
            $this->erreurs[] = self::PRENOM_INVALIDE;
        }
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            // self fait reference a la classe
            // si le paramettre n'es pas un email on ajoute une erreur dans notre tableau d'erreur
            $this->erreurs[] = self::EMAIL_INVALIDE;
        }
    }

    // creation des getters


    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function getEmail()
    {
        return $this->email;
    }

    // creation de la methodes erreurs
    public function getErreurs()
    {
        return $this->erreurs;
    }

    // creation de la fonction qui verifie si l utilisateur et valide ou non est pas
    public function isUserValide()
    {
        // verification: si le tableau d'erreur est vide
        return empty($this->erreurs);
    }
}
