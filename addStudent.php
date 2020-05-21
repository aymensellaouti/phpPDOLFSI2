<?php
require_once 'authentification/isAuthenticated.php';
require_once 'BD/getConnextion.php';

$response = $bdd->prepare("select * from section");
$response->execute(array());
$sections = $response->fetchAll(PDO::FETCH_OBJ);
include_once 'fragments/header.php';
?>
<div class="container mt-5">
    <form
            method="post"
            action="handleAddStudent.php"
            enctype="multipart/form-data"
    >
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"
                   class="form-control"
                   name="name"
                   id="name" aria-describedby="name"
                   placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="cin">Cin</label>
            <input type="text"
                   class="form-control"
                   name="cin"
                   id="cin" aria-describedby="name"
                   placeholder="Enter cin">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number"
                   class="form-control"
                   name="age"
                   id="age" aria-describedby="age"
                   placeholder="Enter age">
        </div>
        <div class="form-group">
            <label for="image">Avatar</label>
            <input
                   type="file"
                   class="form-control"
                   name="image"
                   id="image"
            >
        </div>
        <div class="form-group">
            <label for="exampleSelect1">Section</label>
            <select
                    name="section"
                    class="form-control select2" id="exampleSelect1">
                <?php
                    foreach ($sections as $section) {
                ?>
                        <option value="<?= $section->id ?>"><?= $section->designation ?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">
            Add Student
        </button>
    </form>
</div>
<?php
include_once 'fragments/footer.php';
?>