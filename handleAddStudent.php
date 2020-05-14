<?php
require_once 'authentification/isAuthenticated.php';
require_once 'BD/getConnextion.php';

if (
    isset($_POST['name'])
    && isset($_POST['age'])
    && isset($_POST['cin'])
    && isset($_POST['section'])) {
    $req = "INSERT INTO `etudiant` (`id`, `name`, `age`, `cin`, `section_id`) VALUES (NULL, 'Firas', 24, '1245', 1);";
    $response = $bdd->prepare($req);
    $result = $response->execute(
        array(
        )
    );
    die($result);
    header('location:students.php');
} else {
    header('location:home.php');
}