<?php

// pour cree une une interface il faut mettre le mot clé interface avant 
// une classe ne peut pas avoir le meme non qu une interface et vis versa
interface Personnels 
{
// nous pouvons declaré des constantes

const ANCIENNETE_MIN = 5;
const ANCIENNETE_MAX = 20;


// nous pouvons declarer des methodes signatures
// nous ne pouvont declarer que des methode public , (private et protected non autorisé)

    public function getNom();
    public function getAnciennete();
    public function getIndice();


    public function calculeSalaire();



}