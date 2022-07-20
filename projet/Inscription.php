<?php
// INCLUSION BASIC
// require_once 'entity/Utilisateur.php';
// require_once 'entity/UtilisateursManager.php';
// MEILLEUR METHODE POUR INCLUSION AVEC FONCTION AUTOLOAD   (voir structure/autoload.php)
require 'fonction/inclureClasses.php';


// INSTANCIATION DE PDO
$bddPDO = new pdo('mysql:host=localhost;dbname=espace_membres', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// INSTANCIATION DE LA CLASSE UtilisateursManager

$manager = new UtilisateursManager($bddPDO);

// DECLARATION DE LA VARIABLE MESSAGE
$message = '';
if ($_POST) {
    // ON INSTANCIE UN OBJET UTILISATEUR ET INITIALISATION DES VARIABLES
    $utilisateur = new Utilisateur([
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'tel' => $_POST['tel']
    ]);
    // ON VERIFIE SI L UTILISATEUR ET VALIDER
    if ($utilisateur->isUserValide()) {
        $manager->inserer($utilisateur);
        $message .= '<div class="alert alert-success" role="alert">Utilisateur ajouté avec succès</div>';
    } else {
        // ON RECUPERE LES ERREURS
        $erreurs = $utilisateur->getErreurs();
        $message .= '<div class="alert alert-danger" role="alert">L\'utilisateur n\'est pas valide</div>';
    }
}
?>
<?php require 'structure/haut.php' ?>




<section class="container">
    <h1 class="text-center">Inscription</h1>
    <form method="post">
        <?= $message ?>
        <div class="mb-3">
            <!-- VERIFIE SI LA CONSTANTE EMAIL_INVALIDE SE TROUVE DANS LE TABLEAU ERREURS -->
            <?php if (isset($erreurs) && in_array(Utilisateur::EMAIL_INVALIDE, $erreurs))
                echo '<span class="text-danger">Email invalide</span><br>' ?>

            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <?php if (isset($erreurs) && in_array(Utilisateur::NOM_INVALIDE, $erreurs))
                echo '<span class="text-danger">Nom invalide</span><br>' ?>

            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="mb-3">
            <?php if (isset($erreurs) && in_array(Utilisateur::PRENOM_INVALIDE, $erreurs))
                echo '<span class="text-danger">Prenom invalide</span><br>' ?>

            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="nom" name="prenom">
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Tel</label>
            <input type="text" class="form-control" id="tel" name="tel">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</section>

<?php require 'structure/bas.php' ?>