<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <!-- AQUI EMPIEZA EL CSS -->
  <style media="screen">
    .mal{
      background-color:red;
    }
    .bien{
      background-color:green;
    }
    form{
      margin:auto;
      color: black;
      font-size: 14px;
      padding: 25px;
      width: 380px;
      border:solid 10px LightPink;
      border-radius: 5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
  }

  form#formulario fieldset {
  border: none;
  }


  </style>
  <!-- AQUI TERMINA EL CSS -->
  <body>
    <fieldset>
    <form>
      <legend> Formulario de Contacto </legend>
      <p><label for="nombre">*Nombre:</label> <input type="text" id="nombre" value="" class=""></p>
      <p><label for="apellido">Apellido:</label><input type="text" id="apellido" value="" class=""></p>
      <p><label for="telefono">*Teléfono:</label><input type="text" id="telefono" value="" class=""></p>
      <p><label for="email">*Correo electrónico:</label><input type="text" id="email" value="" class=""></p>

      <button type="button" onclick="guardar()">Guardar</button>
    </fieldset>

    </form>


  </body>
  <!-- AQUI EMPIEZA EL JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" charset="utf-8"></script>
  <script type="text/javascript">
  function guardar(){
    var nombre    = $('#nombre').val();
    var apellido  = $('#apellido').val();
    var telefono  = $('#telefono').val();
    var email     = $('#email').val();

    $('#nombre').removeClass('bien');
    $('#nombre').removeClass('mal');
    $('#email').removeClass('bien');
    $('#email').removeClass('mal');
    $('#telefono').removeClass('bien');
    $('#telefono').removeClass('mal');
    $('#apellido').addClass('bien');

    if(nombre!='')
      $('#nombre').addClass('bien');
    else
      $('#nombre').addClass('mal');

      if(telefono!='')
        $('#telefono').addClass('bien');
      else
        $('#telefono').addClass('mal');

        if(email!='')
          $('#email').addClass('bien');
        else
          $('#email').addClass('mal');

    if(nombre!='' && telefono!='' && email!=''){


      var mensaje = confirm('Desea guardar a '+nombre);
      if(mensaje){
        $.ajax({
          headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          method: "POST",
          url: "{{route('contactos.store')}}",
          data: { 'nombre':nombre, 'apellido': apellido,'telefono':telefono,'email': email},
          succes:function(data){
            console.log(data);
          }
        })
        ///
      }
    }else{
      alert('Faltan campos, Nombre, Telefono & Email son obligatorios!!');
    }
  }


  </script>
  <!-- AQUI TERMINA EL JS -->
</html>
