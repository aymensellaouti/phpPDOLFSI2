<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=lfsi2',
        'root', '');
} catch (PDOException $e)
{
    echo "Erreur : " . $e->getMessage();
    die();
}
// Préparation de la requete
$request = "select * from etudiant";
// lancer la requete
$response = $bdd->query($request);

$etudiants = $response->fetchAll(PDO::FETCH_OBJ);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
