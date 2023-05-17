<?php
spl_autoload_register(function ($nombre_clase) {
    $dirName =  __DIR__ ."/../";
    
    $nomClass =  $dirName.'/'. str_replace('\\','/',$nombre_clase ).'.php' ;
     //echo $nomClass;
    require_once $nomClass;
 });
 
 

    $curl = new \Class_php\CurlRequest("https://randomuser.me/api/");

    $resultado = $curl ->sendGet();
    
    $datos = $resultado['results'] ; 
     
     echo $resultado ;
     