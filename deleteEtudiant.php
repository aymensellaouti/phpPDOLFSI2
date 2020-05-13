<?php
session_start();
if (isset($_GET['id'])) {
    /*
     * Se connecter à la base de données
     */
    require_once 'BD/getConnextion.php';
    /*
     * Executer la requete de suppression
     *      Si ok rediriger vers la liste des étudianst avec message succes
     *      sinon rediriger vers la liste des étudianst avec message erreur
     * */
     $req = "delete from etudiant where id= :monId";
     $response = $bdd->prepare($req);
     $response->execute(
         array(
             'monId' => $_GET['id']
         )
     );
     $response->fetch(PDO::FETCH_OBJ);
     if ($response) {
         $_SESSION['success'] = 'Etudiant supprimé avec succès';
     }
}
    // Appel illégal
    header('location:students.php');
