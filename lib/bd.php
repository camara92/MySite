<?php
//connexion à la base 
try{

    $db =new PDO('mysql:host=localhost; dbname=camaradatabase', 'root', ''); 
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //warnign if error 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    // $db->setAttribute(PDO::FETCH_ASSOC);
    //oBJ aussi possible 
}catch(Exception $e){
    echo "Connexion non établie"; 
    //message error 

    echo $e->getMessage(); 
}
