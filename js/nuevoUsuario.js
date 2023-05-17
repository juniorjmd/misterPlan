$(document).ready(()=>{
    console.log('inicio'); 
    $("#nuevoUsuario" ).on( "click", (e)=> {
        e.preventDefault();
        let  end = new Date();
        $.ajax({
         url: 'actions/getListUsers.php?'+end.getTime(),
         dataType: 'json',
         error : (error) =>{  Swal.fire({  icon: 'error',  title: 'Oops...',  text: error.responseText, });},
         success: (data)=> {
         console.log('wewerwer',data );
         let result = data.results[0] ; 
         $("#gender").val(result.gender);
         $("#name").val(`${result.name.first} ${result.name.last}`);
         $("#street").val(`${result.location.street.number} de  ${result.location.street.name}   `);
         $("#city").val(result.location.city);
         $("#state").val(result.location.state);
         $("#country").val(result.location.country);
         $("#postcode").val(result.location.postcode);
         $("#email").val(result.email);
         $("#username").val(result.login.username);
         $("#sha1").val(result.login.sha1);
         $("#registered").val(result.registered.date);
         $("#phone").val(result.phone);
         $("#cell").val(result.cell);
         $("#urlPicturiLarge").val(result.picture.large);
         $("#urlPicturiMedium").val(result.picture.medium);
         $("#urlPicturiThumbnail").val(result.picture.thumbnail);
         $("#divImagen").html(`<img src="${result.picture.large}" class="img-fluid" alt="Responsive image">

        `);          
  }
} );
       } ); 
       
      $("#EnviarNuevoUsuario" ).on( "click", (e)=> {
          e.preventDefault();
          let  end = new Date();  
          const form = $('#usuarioForm');
          const datos = convertFormToJSON(form); 
          console.log(JSON.stringify(datos));
          const  posting = $.post( 'actions/addUser.php',datos);
          posting.done(( data )=> {
              const json = JSON.parse(data)
              console.log( json.success )
              toastr.success(json.success)
              $(':input').val('');
              $('#divImagen').html( '');
           } );
           posting.fail(( error )=> {
               Swal.fire({  icon: 'error',  title: 'Oops...',  text: error.responseText, });
           } );
       } );    
       } );
 

