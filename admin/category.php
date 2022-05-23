<?php
    include ("../lib/includes.php"); 
    include ("../partials/admin.header.php"); 

 
   /**
    * suppression 
    
    */
if(isset($_GET['delete'])){
    //permet de bloquer si pas admin 

    checkcsrf(); 
    $id= $bd->quote($_GET['delete']); 
    $bd->query("DELETE FROM categories WHERE id = $id");
    setFlash('La catégorie a bien été supprimé'); 
    header('Location:category.php');
    die();

}
/**
 * Catégories 
 * 
 */
$select =  $bd->query("SELECT id, name, slug from categories"); 
$categories = $select->fetchAll(); 


?>

<h1 class="container-fluid text-center bg-primary p-2 text-white  ">Les catégories </h1>
<p><a href="category.edit.php" class="btn btn-success container  p-2">Ajouter une nouvelle catégorie </a></p>
<table class="table table-stripped bg-light border">
    <!-- <?= var_dump($categories) ?> -->
    <thead>
        <tr class="bg-dark text-white text-center">
            <th>Id</th>
            <th>Nom </th>
            <th>Actions </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categories as $categorie): ?>
            <tr class="text-center">
                <td><?= $categorie['id']; ?></td>
                <td><?= $categorie['name']; ?></td>
                <td>
                    <a href="categorie.edit.php?id=<?=$categorie['id']; ?>" class="btn btn-default">Modifier</a>
                    <a href="?delete=<?= $categorie['id']; ?>&<?= csrf(); ?>" class="btn btn-error" onclick="return confirm('voulez-vous vraimernt supprimer ?');">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>


<?php
include ("../partials/footer.php"); 
?>