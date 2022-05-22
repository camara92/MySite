<?php
    session_start();

    if(!isset($_SESSION['id'])){
        header('Location:' .WEBROOT. 'login.php');
    }
   
    //var_dump($_SESSION['id']); 
?>