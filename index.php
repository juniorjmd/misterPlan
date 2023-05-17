<!DOCTYPE html>
<html>
    <head>
         <?php 
               $url = $_GET['url'] ; 
               if( is_null($url) ){
                   $titulo = "usuario";
               }else{
                    $titulo =  $url;
               }
               ?>
        <title><?=ucfirst($titulo);?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>sistema de prueba mister plan</h1>
                </div>
            </div>
             <div class="row">
    <div class="col-3">
        <ul class="list-group">
            <li class="list-group-item"><a href="?url=nuevoUsuario">Crear Usuario</a></li> 
            <li class="list-group-item"><a href="?url=ListarUsuarios">Listar Usuarios</a></li>
        </ul>
      
    </div>
    <div class="col-9">
        <hr><!-- comment --> 
       
        <?php if(!is_null($url) && file_exists("view/$url.php" )  ){  
                   require_once "view/$url.php";
               } else{
                   
                   $url = 'inicio';
                     require_once "view/inicio.php";
               }?>
             
    </div>
  </div>
        </div>
    </body> 
    
    <script   src="https://code.jquery.com/jquery-3.7.0.js"  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="  crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   <script src="js/main.js" type="text/javascript"></script>
      <script src="js/<?=$url?>.js" type="text/javascript"></script>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
</html>

