<?php

class UtilisateursManager
{

    // creation d une variable qui va contenir la connexion a la bdd

    private $bddPDO;

    // ont initialise la connexion a la bdd
    public function __construct(PDO $bddPDO)
    {
        $this->bddPDO = $bddPDO;
    }

    // creation d une fonction qui va permettre d ajouter un utilisateur

    public function inserer(Utilisateur $utilisateur)
    {   // preparation de la requete
        $requete = $this->bddPDO->prepare('INSERT INTO utilisateurs(nom, prenom, tel, email) VALUES(:nom, :prenom, :tel, :email)');
        // assignation des marqueures de la requete aux attributs de l utilisateur donné en parametre

        $requete->bindValue(':nom', $utilisateur->getNom());
        $requete->bindValue(':prenom', $utilisateur->getPrenom());
        $requete->bindValue(':tel', $utilisateur->getTel());
        $requete->bindValue(':email', $utilisateur->getEmail());
        // execution de la requete
        $requete->execute();
    }


    // creation d une fonction qui va permettre de recuperer un utilisateurs

    public function afficherListUtilisateurs()
    {
        // preparation de la requete
        $requete = $this->bddPDO->query('SELECT * FROM utilisateurs ORDER BY  id DESC ' );
        // execution de la requete
        $requete->execute();
        // on recupere les données de la requete
        $donnees = $requete->fetchAll(PDO::FETCH_ASSOC);
        // on retourne les données
        return $donnees;
    }

    // creation d une foncion qui va permettre de recuperer un utilisatur par son id

    public function afficherUtilisateurParId($id)
    {
        // preparation de la requete
        $requete = $this->bddPDO->prepare('SELECT * FROM utilisateurs WHERE id = :id');
        // assignation des marqueures de la requete aux attributs de l utilisateur donné en parametre
        $requete->bindValue(':id', $id);
        // execution de la requete
        $requete->execute();
        // on recupere les données de la requete
        $donnees = $requete->fetch(PDO::FETCH_ASSOC);
        // on retourne les données
        return $donnees;
    }

    // creation d une foncion qui va permettre de modifier un utilisateur par son id est

    public function modifierUtilisateurParId(Utilisateur $utilisateur)
    {
        // preparation de la requete
        $requete = $this->bddPDO->prepare('UPDATE utilisateurs SET nom = :nom, prenom = :prenom, tel = :tel, email = :email WHERE id = :id');
        // assigiassion des marqueures de la requete aux attributs de l utilisateur donné en parametre
        $requete->bindValue(':id', $utilisateur->getId());
        $requete->bindValue(':nom', $utilisateur->getNom());
        $requete->bindValue(':prenom', $utilisateur->getPrenom());
        $requete->bindValue(':tel', $utilisateur->getTel());
        $requete->bindValue(':email', $utilisateur->getEmail());
        // execution de la requete
        $requete->execute();
    }

    // creation d une fonction qui va permettre de supprimer un utilisateur par son id

    public function supprimerUtilisateurParId($id)
    {
        // preparation de la requete
        $requete = $this->bddPDO->prepare('DELETE FROM utilisateurs WHERE id = :id');
        // assigiassion des marqueures de la requete aux attributs de l utilisateur donné en parametre
        $requete->bindValue(':id', $id);
        // execution de la requete
        $requete->execute();
    }
}
