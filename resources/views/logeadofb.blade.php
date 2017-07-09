<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logeado | {{$nick}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>facebook</h1>
        <p>uso de api de facebook para iniciar session</p>
        <p><a class="btn btn-success btn-lg" href="{{route('facebook.index')}}" >volver a intentar</a></p>
      </div>
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="{{$imagen}}" alt="avatar">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">{{$nombre}}</h4>
          <p><b>ID: </b>{{$id}}</p>
          <p><b>EMAIL: </b>{{$email}}</p>
        </div>
      </div>
    </div>


  </body>
</html>
