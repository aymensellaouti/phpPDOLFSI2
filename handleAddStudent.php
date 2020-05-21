<?php
require_once 'authentification/isAuthenticated.php';
require_once 'BD/getConnextion.php';

if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['cin']) && isset($_POST['section'])) {
    $req = "INSERT INTO etudiant (name, age, cin, image, section_id) VALUES (:name, :age, :cin, :image, :section)";
    if (isset($_FILES['image'])){
        $image = $_FILES['image'];
        $pathname = md5(uniqid()).$image['name'];
        $pathname = "assets/uploads/${pathname}";
        move_uploaded_file($image['tmp_name'], $pathname);
    }
    $response = $bdd->prepare($req);
    $result = $response->execute(
        array(
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'cin' => $_POST['cin'],
            'image' => $pathname,
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