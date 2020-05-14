<?php
include_once 'authentification/isAuthenticated.php';
include_once 'fragments/header.php';
?>

<div class="jumbotron">
    <h1 class="display-3">Hello <?= $_SESSION['user'] ?></h1>
    <p class="lead">Bienvenu dans votre espace.</p>
    <hr class="my-4">
    <p>Vous pouvez accéder à toutes les fonctionnalités qui vous sont allouées.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
</div>


<?php
    include_once 'fragments/footer.php';
?>