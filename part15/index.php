<?php
// toujours dans cette ordre inclure les interfaces avant les classes
require_once 'entity/User.php';


function s()
{
    echo "<br>";
}
////////////////////////////////////////////////////////////////////////////////////////////////
// 15- PARCOURIR UN OBJET
// cousiste a parcourir grace au foreach un objet


$user1 = new User("Jean", "Mirty", 23, "email@email.com");

// afficher tout les attributes
$user1->listerAttributs();