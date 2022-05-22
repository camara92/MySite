<?php
//connexion à la base 
try{

    $bd =new PDO('mysql:host=localhost; dbname=camaradatabase', 'root', ''); 
    $bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //warnign if error 
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    // $bd->setAttribute(PDO::FETCH_ASSOC);
    //oBJ aussi possible 
}catch(Exception $e){
    echo "Connexion non établie"; 
    //message error 

    echo $e->getMessage(); 
}
