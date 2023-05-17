<html > 
<body> 
    <form id="usuarioForm" method="post">
<div id="container">
    
    <div class="row">
        <div class="col-12 ">
            <h4>Creacion de usuarios</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-3 offset-8">
            <button class="btn btn-info"   id="nuevoUsuario">Generar Usuario</button>
        </div>
    </div>
    
       <div class="row">
<div class="col-8">
        <div class="row">
           <div class="col-4"> 
               <label for="Usuario" class="form-label">Usuario :</label>
             <input type="text" name="username" id="username" class="form-control" >    
        </div>  <div class="col-4"> 
              <label for="Nombre" class="form-label">Nombre :</label>
            <input type="text" name="name" id="name" class="form-control" > 
        </div> <div class="col-4"> <label for="Genero" class="form-label">Genero :</label>
            <input type="text" name="gender" id="gender" class="form-control" > 
        </div> 
        </div>
        
        




        <hr><!-- comment -->
          <div class="row">
           <div class="col-4"> <label for="Correo" class="form-label">Correo :</label>
            <input type="text" name="email" id="email" class="form-control" > 
        </div>  <div class="col-4"> <label for="Telefono" class="form-label">Telefono :</label>
            <input type="text" name="phone" id="phone" class="form-control" > 
        </div> <div class="col-4"> <label for="Celular" class="form-label">Celular :</label>
            <input type="text" name="cell" id="cell" class="form-control" > 
        </div> 
        </div>
        
        
        <hr>
       


          <div class="row">
           <div class="col-4"> <label for="Direccion" class="form-label">Direccion :</label>
             <input type="text" name="street" id="street" class="form-control" > 
        </div>  <div class="col-4"> <label for="Ciudad" class="form-label">Ciudad :</label>
            <input type="text" name="city" id="city" class="form-control" > 
        </div> <div class="col-4"> <label for="Departamento" class="form-label">Departamento :</label>
            <input type="text" name="state" id="state" class="form-control" > 
        </div> 
        </div>
        
        <br>
        
          <div class="row">
           <div class="col-4"> <label for="Pais" class="form-label">País :</label>
            <input type="text" name="country" id="country" class="form-control" > 

        </div>  <div class="col-4"> <label for="postcode" class="form-label">Codigo Postal :</label>
            <input type="text" name="postcode" id="postcode" class="form-control" > 
        </div> <div class="col-4">
            <button class="btn btn-success" id="EnviarNuevoUsuario">Guardar</button>
        </div> 
      
  </div>

</div><div class="col-4" id="divImagen">
</div>
  </div>  </div>

        <input type="hidden" id="urlPicturiLarge" name="urlPicturiLarge"  >
<input type="hidden" id="urlPicturiMedium"  name="urlPicturiMedium"  >
<input type="hidden" id="urlPicturiThumbnail"   name="urlPicturiThumbnail"  >
<input type="hidden" id="sha1" name="sha1"  >
<input type="hidden" id="registered" name="registered"  > 

  </form>      
        
</body> 
</html>