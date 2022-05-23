<?php
// On démarre une session
session_start();

if ($_POST) {
    if (
        isset($_POST['username']) && !empty($_POST['pwd'])
       
    ) {
        // On inclut la connexion à la base
        require_once('./lib/bd.php');

        // On nettoie les données envoyées
        $username = strip_tags($_POST['username']);
        $pwd = strip_tags($_POST['pwd']);
       

        $sql = 'INSERT INTO `users` (`username`, `pwd`) VALUES (:username, :pwd);';

        $query = $bd->prepare($sql);

        $query->bindValue(':username', $username, PDO::PARAM_STR);
        $query->bindValue(':pwd', $pwd, PDO::PARAM_STR);
      
        //PARAM_INT car nombre 
        $query->execute();
//message confimation d'un ajout de username 
        $_SESSION['message'] = "Produit ajouté";
       // require_once('close.php');

        header('Location: index.php');
    } else {
        $_SESSION['erreur'] = "Le formulaire est incomplet";
    }
}

?>
<!-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un username</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head> -->
<?php include("partials/header.php"); ?>
<body class="bg-secondary">
    <main class="container ">
        <div class="row">
            <section class="col-12 my-5">
                
            <H1 class="container bg-primary text-white text-center p-3 shadow bold my-5 ">Bienvenue sur la page inscription</H1>
                <form class="container w-50 bg-info my-5" method="post">
                    <div class="form-group">
                        <label for="username">Nom utilisateur</label>
                        <input type="text" id="username" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mot de passe </label>
                        <input type="text" id="pwd" name="pwd" class="form-control">

                    </div>
                   
                   
                    <button class="btn btn-primary">Envoyer</button>
                </form>
            </section>
        </div>
    </main>
</body>

</html>