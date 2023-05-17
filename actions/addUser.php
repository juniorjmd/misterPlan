<?php
include "../helper/config.php";
spl_autoload_register(function ($nombre_clase) {
    $dirName =  __DIR__ ."/../";
    
    $nomClass =  $dirName.'/'. str_replace('\\','/',$nombre_clase ).'.php' ;
     
    require_once $nomClass;
 });
 
 
 //$servidor=null, $usuario= null,$password=null ,$base_datos = null 
 if (isset($_POST))
 {
     try{
         //var_dump($_POST);
         foreach ($_POST as $key => $value) {
            $$key  = $value;
         }
         $nUsuario = new Class_php\usuario($gender, $name, $street, $city, $state, $country, $postcode, $email, $username, $sha1, $registered, $phone, $cell, $urlPicturiLarge, $urlPicturiMedium, $urlPicturiThumbnail);
         $r = $nUsuario->safe(); 
         if($r[0]){
             
             echo json_encode(array("success" =>$r[1]));
        die(); 
         }else{ 
              throw (array("error" =>$r[1]));
              die(); 
         }
    } catch (Exception $e){
         throw (array("error" =>"error del servidor - Error al tratar de guardar en la base de datos"));
        die();
      }      
 }
 else{
         throw (array("error" =>"error del servidor - no existen datos para operación"));
     
 }
 
 
