<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <!-- AQUI EMPIEZA EL CSS -->
  <style media="screen">

  </style>
  <!-- AQUI TERMINA EL CSS -->
  <body>
    <h2>Contactos</h2>
    <button type="button" onclick="window.open('{{route('contactos.create')}}')">Crear nuevo</button>
    <table>
      <thead>
        <tr>
          <td>id</td>
          <td>nombre</td>
          <td>apellido</td>
          <td>telefono</td>
          <td>email</td>
        </tr>
      </thead>
      @foreach ($contactos as $contacto)
        <tr>
          <td>{{$contacto->id}}</td>
          <td>{{$contacto->nombre}}</td>
          <td>{{$contacto->apellido}}</td>
          <td>{{$contacto->telefono}}</td>
          <td>{{$contacto->email}}</td>
        </tr>
      @endforeach
    </table>


  </body>
  <!-- AQUI EMPIEZA EL JS -->
  <script type="text/javascript">

  </script>
  <!-- AQUI TERMINA EL JS -->
</html>
