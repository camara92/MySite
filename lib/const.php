
<?php
//$url = $_SERVER['REQUEST_URI'];
//var_dump($directory = basename(dirname(dirname(__FILE__))));
$directory = basename(dirname(dirname(__FILE__))); 
$url = explode($directory, $_SERVER['REQUEST_URI']);
if(count($url)==1){
    define('WEBROOT', '/'); 
}else{
    define('WEBROOT', $url[0] . 'Portefolio/');
}
//var_dump($url);
//define('WEBROOT', dirname($_SERVER['SCRIPT_NAME']) . '/');

//var_dump(WEBROOT); 