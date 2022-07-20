<?php

require 'fonction/inclureClasses.php';

// INSTANCIATION DE PDO
$bddPDO = new pdo('mysql:host=localhost;dbname=espace_membres', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// INSTANCIATION DE LA CLASSE UtilisateursManager

$manager = new UtilisateursManager($bddPDO);
// RECUPERATION DE L UTILISATEUR PAR SON ID
if ($_GET['id']) {
    $utilisateur = $manager->afficherUtilisateurParId($_GET['id']);
}
// DECLARATION DE LA VARIABLE MESSAGE

$message = '';
if ($_POST) {
    // ON INSTANCIE UN OBJET UTILISATEUR ET INITIALISATION DES VARIABLES
    $utilisateur = new Utilisateur([
        'id' => $_GET['id'],
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'tel' => $_POST['tel']
    ]);
    // ON VERIFIE SI L UTILISATEUR ET VALIDER
    if ($utilisateur->isUserValide()) {
        // ON MET UN A JOUR L UTILISATEUR GRACE A LA FONCTION SUIVNTE:
        $manager->modifierUtilisateurParId($utilisateur);
        $message .= '<div class="alert alert-success" role="alert">Utilisateur modifier avec succès</div>';
        header('location:administration.php');
    } else {
        // ON RECUPERE LES ERREURS
        $erreurs = $utilisateur->getErreurs();
        $message .= '<div class="alert alert-danger" role="alert">L\'utilisateur n\'est pas valide</div>';
    }
}
?>
<?php require 'structure/haut.php' ?>




<section class="container">
    <h1 class="text-center">Modification</h1>
    <form method="post">
        <?= $message ?>
        <div class="mb-3">
            <!-- VERIFIE SI LA CONSTANTE EMAIL_INVALIDE SE TROUVE DANS LE TABLEAU ERREURS -->
            <?php if (isset($erreurs) && in_array(Utilisateur::EMAIL_INVALIDE, $erreurs))
                echo '<span class="text-danger">Email invalide</span><br>' ?>

            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $utilisateur['email'] ?>">
        </div>
        <div class="mb-3">
            <?php if (isset($erreurs) && in_array(Utilisateur::NOM_INVALIDE, $erreurs))
                echo '<span class="text-danger">Nom invalide</span><br>' ?>

            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?= $utilisateur['nom'] ?>">
        </div>
        <div class="mb-3">
            <?php if (isset($erreurs) && in_array(Utilisateur::PRENOM_INVALIDE, $erreurs))
                echo '<span class="text-danger">Prenom invalide</span><br>' ?>

            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="nom" name="prenom" value="<?= $utilisateur['prenom'] ?>">
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Tel</label>
            <input type="text" class="form-control" id="tel" name="tel" value="<?= $utilisateur['tel'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</section>

<?php require 'structure/bas.php' ?>