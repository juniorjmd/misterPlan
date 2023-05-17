<?php
include "helper/config.php";
spl_autoload_register(function ($nombre_clase) {
    $dirName =  __DIR__ ."/../";
    
    $nomClass =  $dirName.'/'. str_replace('\\','/',$nombre_clase ).'.php' ;
     
    require_once $nomClass;
 });
 try{$coneccion = \Class_php\DataBase::getInstance();
  $result = $coneccion->where("usuarios");

    // print_r($result);
  if(sizeof($result['datos'] ) <= 0 ){
      $result['datos'] = array();
  }

 }catch(ErrorException $e){
    echo $e->getMessage();
 }
 
?>

<html > 
    <body>
         <div class="row">
             <div class="col-11 text-center"><h4>Listado Usuarios Generados</h4></div></div>
          <div class="row">
    <div class="col-11">
        <table class="table" >
            <tr>
                <th>Nombre</th>
    <th>Usuario</th>
    <th>Genero</th>
    <th>Dirección</th>
    <th>Ciudad</th>
    <th>Departamento</th>
    <th>País</th>
    <th>Correo</th> 
            </tr>
           
     <?php 
    foreach ($result['datos'] as $key => $value) {
        ?> <tr>
    <td><?=$value['name']; ?></td>
    <td><?=$value['username']; ?></td>
    <td><?=$value['gender']; ?></td>
    <td><?=$value['street']; ?></td>
    <td><?=$value['city']; ?></td>
    <td><?=$value['state']; ?></td>
    <td><?=$value['country']; ?></td>
    <td><?=$value['email']; ?></td>  </tr>
    <?php  } ?>
    
        </table></div><!-- comment -->
          </div>
    </body></html>