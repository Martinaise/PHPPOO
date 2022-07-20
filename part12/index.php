<?php

require_once 'entity/Employe.php';
require_once 'entity/AgentSecurite.php';

function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 12- CLASSES ABSTRAITES (mis en oeuvre)



 $employe1 = new AgentSecurite("Jean","mirty",2356);

 // nous appelons la methode obtenirSalaire() de la classe Employe
    $employe1->obtenirSalaire();
    s();
    // nous appelons la methode prendreConge() de la classe Employe
    $employe1->prendreConge();


    //  les classes abstract doivent etre etendu aux enfant pour etre utilisé 