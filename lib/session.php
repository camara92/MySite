<?php
    function flash(){
        if(isset($_SESSION['flash'])){
            //extraire les variables dans la function setFlash 
            //ou les définir sous forme des varibles 

            extract($_SESSION['flash']); 
           // unset($_SESSION['flash']); 
            return  "<div class='alert alert-$type'> $message </div>";
        }
    }
    function setFlash($message, $type='success'){
        $_SESSION['flash']['message'] = $message; 
        $_SESSION['flash']['type'] =$type; 
    }
?>