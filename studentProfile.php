<?php
include_once 'authentification/isAuthenticated.php';
include_once 'BD/getConnextion.php';
include_once 'fragments/header.php';

/*
 * Vérfier que j'ai le id
 * Récupérer ma base de données puis chercher l'utilisateur qui a un id égale à $_GET['id']
 * Si oui j'affiche son profile
 * Sinon rediriger vers la page d'accueil
 * */
if($_GET['id']) {
    $req = "select e.id, e.name, e.age, e.cin, s.designation as section from etudiant e, section s where e.section_id = s.id and e.id= ?";
    $reponse = $bdd->prepare($req);
    $reponse->execute(array($_GET['id']));
    $etudiant = $reponse->fetch(PDO::FETCH_OBJ);
    if (!$etudiant) {
        header('location:home.php');
    }
} else {
    header('location:home.php');
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 img">
            <img
                src="assets/images/default.png"
                alt="<?=$etudiant->name ?>"
                class="img-rounded">
        </div>
        <div class="col-md-6 details">
            <blockquote>
                <h5><?=$etudiant->name ?></h5>
                <small><cite title="Source Title">Chicago, United States of America  <i class="icon-map-marker"></i></cite></small>
            </blockquote>
            <p>
                Age : <?=$etudiant->age ?> ans <br>
                Cin : <?=$etudiant->cin ?><br>
                Section : <?=$etudiant->section ?>
            </p>
        </div>
    </div>
</div>
<?php
include_once 'fragments/footer.php';
?>>