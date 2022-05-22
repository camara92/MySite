<?php include ("lib/includes.php")?>
<?php include("partials/header.php"); ?>
<h1 class="text-center text-white  bg-info border container">Mon portefolio en PHP</h1>
<?php include("lib/debug.php"); ?>

<?php
$select = $db->query("SELECT * FROM users");

//var_dump($select->fetch());

?>
<?php

include("partials/Footer.php");
?>