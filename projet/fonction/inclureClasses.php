<?php

function inclureClasses($class)
{
    // NOUS ALLONS CHERCHER LE FICHIER DE CLASSE DANS LE DOSSIER SI IL EXISTE
    //ON CONCATELE LE DOSSIER AVEC LE NOM DE LA CLASSE PUIS ON AJOUTE L EXTENTION .php
    if (file_exists($fichier = 'entity/' . $class . '.php')) {

        require $fichier;
    }
}
// AUTOLOADER CETTE FONCTION PERMET D AJOUTER NOTRE FONCTION A LA LISTE DES FONCTIONS AUTOLOAD NATIVE DE PHP
spl_autoload_register('inclureClasses');