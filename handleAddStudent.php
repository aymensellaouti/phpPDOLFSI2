<?php
require_once 'authentification/isAuthenticated.php';
require_once 'BD/getConnextion.php';

if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['cin']) && isset($_POST['section'])) {
    $req = "INSERT INTO etudiant (name, age, cin, section_id) VALUES (:name, :age, :cin, :section)";
    $response = $bdd->prepare($req);
    $result = $response->execute(
        array(
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'cin' => $_POST['cin'],
            'section' => $_POST['section']
        )
    );
    if ($result) {
        $_SESSION['success'] = "L'étudiant(e) ${_POST['name']} a été ajouté avec succès";
    } else {
        $_SESSION['error'] = "Problème avec la base de données";
    }
    header('location:students.php');
} else {
    header('location:home.php');
}