<?php
include("../lib/includes.php");

if (isset($_POST['name']) && isset($_POST['slug'])) {
    //vérifie si slug est valide 
    $slug = $_POST['slug'];
    if (preg_match('/^[a-z\-0-9]+$/', $slug)) {

        $name = $bd->quote($_POST['name']);
        $slug = $bd->quote($_POST['slug']);
        $bd->query("INSERT INTO categories SET name=$name, slug=$slug");
      setFlash('Catégorie bien ajouté dans la base. Merci'); 
       //echo 'Catégorie bien ajouté';
        header('Location:category.php');
        die(); 
    } else {
        setFlash('Le slug n\'est pas valide ', 'danger');
    }
}

include("../partials/admin.header.php");

?>

<h1 class="container-fluid text-center bg-primary p-2 text-white  ">Editer une catégorie </h1>

<body class="login bg-dark">

    <div>

        <form class="container w-50 bg-light my-5" action="#" method="post">
            <div class="form-group">
                <label for="name">Nom de la catégorie </label>
                <?= input('name');  ?>
            </div>
            <div class="form-group">
                <label for="slug">Url de la catégorie </label>
                <?= input('slug');  ?>
            </div>

            <button class="btn btn-default" type="submit">enregistrer </button>
        </form>
    </div>
</body>

<?php
include("../partials/footer.php");
?>