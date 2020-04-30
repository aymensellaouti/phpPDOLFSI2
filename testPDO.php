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
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="alert alert-primary">
    Liste des étudiants
</div>
   <table class="table table-hover">
       <thead>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>cin</th>
       </thead>
       <tbody>
       <?php
            foreach ($etudiants as $etudiant) {
       ?>
            <tr>
                <td><?= $etudiant->id?></td>
                <td><?= $etudiant->name?></td>
                <td><?= $etudiant->age?></td>
                <td><?= $etudiant->cin?></td>
            </tr>
       <?php
            }
       ?>
       </tbody>
   </table>
<div class="form-group has-success">
    <label class="form-control-label" for="inputSuccess1">Valid input</label>
    <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
    <div class="valid-feedback">Success! You've done it.</div>
</div>
</body>
</html>
