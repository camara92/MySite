<?php
// $auth =0; 
    session_start();
if(!isset($auth)){


    if(!isset($_SESSION['auth']['id'])){
        header('Location:' .WEBROOT. 'login.php');
        die(); 
    }
    //jetton cscrf
}
// var_dump($_SESSION['id']); 
if(!isset($_SESSION['csrf'])){
    $_SESSION['csrf']= md5(time()+rand());
}

function csrf(){
    return  'csrf='. $_SESSION['csrf'];
}
function checkcsrf(){
    //sil existe 
    if(!$_GET['csrf'] || $_GET['csrf']!=  $_SESSION['csrf']){
        header('Location:' .WEBROOT. '/csrf.php'); 
        die(); 
    }
}
?>