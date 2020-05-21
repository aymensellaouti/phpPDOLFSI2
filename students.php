<?php
require_once 'authentification/isAuthenticated.php';
require_once 'BD/getConnextion.php';

// Préparation de la requete
$request = "select e.id, e.name, e.age, e.cin, e.image, s.designation as section from etudiant e, section s where e.section_id = s.id ";
// lancer la requete
$response = $bdd->query($request);

$etudiants = $response->fetchAll(PDO::FETCH_OBJ);

include_once 'fragments/header.php';
?>

    <div class="container">
        <div class="alert alert-primary">
            Liste des étudiants
        </div>
        <div>
            <a href="addStudent.php">
                <i class="fa fa-user-plus fa-4x" aria-hidden="true"></i>
            </a>

        </div>
        <?php
        if (isset($_SESSION['success'])) {
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
            <?php
        }
        ?>

        <?php
        if (isset($_SESSION['error'])) {
            ?>
            <div class="alert alert-danger">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
            <?php
        }
        ?>

        <table class="table table-hover" id="datatable">
            <thead>
            <th>id</th>
            <th>Avatar</th>
            <th>name</th>
            <th>age</th>
            <th>cin</th>
            <th>section</th>
            <th>actions</th>
            </thead>
            <tbody>
            <?php
            foreach ($etudiants as $etudiant) {
                ?>
                <tr>
                    <td><?= $etudiant->id ?></td>
                    <td>
                        <img
                                src="
                                <?php
                                if ($etudiant->image == '') {
                                    echo 'assets/images/default.png';
                                } else {
                                    echo $etudiant->image;
                                }
                                ?>
                            "
                                alt="<?= $etudiant->name ?>"
                                width="50px"
                                height="50px"
                                class="rounded-circle"
                        >
                    </td>
                    <td><?= $etudiant->name ?></td>
                    <td><?= $etudiant->age ?></td>
                    <td><?= $etudiant->cin ?></td>
                    <td><?= $etudiant->section ?></td>
                    <td>
                        <a href="deleteEtudiant.php?id=<?= $etudiant->id ?>">
                            <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                        </a>

                        <a href="studentProfile.php?id=<?= $etudiant->id ?>">
                            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
<?php
include_once 'fragments/footer.php';
?>