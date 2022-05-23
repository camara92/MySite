<?php
$auth = 0;
include("lib/includes.php");
if (isset($_POST['username']) && isset($_POST['pwd'])) {
    $username = $bd->quote($_POST['username']);
    $pwd = sha1($_POST['pwd']);
    $select = $bd->query("SELECT * FROM users WHERE username =$username AND pwd = '$pwd' ");
    // var_dump($select->rowCount());
    if ($select->rowCount() > 0) {
        //si superier à 0 donc connecté 
        // var_dump($select->fetchAll());
        $_SESSION['auth'] = $select->fetch();
        //si conncté 
        setFlash('Vous êtes bien connecté ! Bienvenue '); 
      header('Location:' . WEBROOT . 'admin/index.php');
      die(); 
      //pour arrêter 
    }
}

/**
 * mettre le header 
 */
include("partials/header.php");

echo '<br><br><br>';
?>






    <div>

        <form class="container w-50 bg-info " action="#" method="post">
            <div class="form-group p-2">
                <label for="username">Nom utilisateur </label>
                <?= input('username');  ?>
            </div>
            <div class="form-group p-2">
                <label for="pwd">Mot de passe </label>
                <input type="pwd" class="form-control" id="pwd" name="pwd">
            </div>
            <button class="btn btn-success container-fluid" type="submit">Se connecter</button>
        </form>
    </div>
    <!-- <?php include("lib/debug.php"); ?> -->
    <?php include("partials/footer.php"); ?>
