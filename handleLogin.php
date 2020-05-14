<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    //  Connexion BD
    include_once 'BD/getConnextion.php';
    // Vérifier s'il existe un user avec ce username et ce mot de passe
    $req = "select * from user where username = :username and password = :password";
    $response = $bdd->prepare($req);
    $response->execute(
        array(
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        )
    );
    $user = $response->fetch(PDO::FETCH_OBJ);
    //Si existe user authetifié
    if ($user) {
        /*
         *  On créer une noouvelle session pour le user et on y ajoute les infos nécessaires
         *  Redirection page accueil
         * */
        $_SESSION['user'] = $user->username;
        $_SESSION['role'] = $user->role;
        header('location:home.php');
    } else /* si non authentifié redirection page login + message erreur */ {
        $_SESSION['loginError'] = "veuillez vérifier vos credentials";
        header('location:login.php');
    }
} else {
    header('location:login.php');
}
