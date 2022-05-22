<?php
// $auth =0; 
    session_start();
if(isset($auth)){


    if(!isset($_SESSION['auth']['id'])){
        header('Location:' .WEBROOT. 'login.php');
    }
}
   // var_dump($_SESSION['id']); 
?>