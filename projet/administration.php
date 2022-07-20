<?php
// CHARGEMENT AUTOMATIQUE DES CLASSES
require 'fonction/inclureClasses.php';

// INSTANCIATION DE PDO
$bddPDO = new pdo('mysql:host=localhost;dbname=espace_membres', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// RECUPERATION DES UTILISATEURS EN BDD
$manager = new UtilisateursManager($bddPDO);


// SUPPRESSION DE L UTILISATEURS EN BDD
if ($_GET && $_GET['action'] == 'supprimer') {
  $manager->supprimerUtilisateurParId($_GET['id']);
  header('location:administration.php');
}
?>


<?php require 'structure/haut.php' ?>
<section class="container">
  <h1 class="text-center">Les utilisateurs</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Email</th>
        <th scope="col">Tel</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($manager->afficherListUtilisateurs() as $utilisateur) {
        echo '<tr>';
        echo '<th scope="row">' . $utilisateur['id'] . '</th>';
        echo '<td>' . $utilisateur['nom'] . '</td>';
        echo '<td>' . $utilisateur['prenom'] . '</td>';
        echo '<td>' . $utilisateur['email'] . '</td>';
        echo '<td>' . $utilisateur['tel'] . '</td>';
        echo '<td><a href="modifier.php?id=' . $utilisateur['id'] . '">Modifier</a> | <a href="?action=supprimer&&id=' . $utilisateur['id'] . '">Supprimer</a></td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</section>

<?php require 'structure/bas.php' ?>