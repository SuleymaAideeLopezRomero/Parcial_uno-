<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Parcial uno</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> Parcial 1</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"> Clientes</a>
              </li>
              <li class="nav-item">
               <!-- <a class="nav-link" href="#">Link</a> -->   
              </li>
              <li class="nav-item dropdown">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center">
          <div class="col-6 p-5 bg-white shadow-lg rounded">
              <h2> Nuevo cliente </h2>
            <form method="post" action="recibe_datos.php">
            <div class="form-group">
            <label for="codigo"> Codigo: </label>
            <input id="codigo" class="form-control" type="text" name="codigo">
            <label for="nombres"> Nombres: </label>
            <input id="nombres" class="form-control" type="text" name="nombres">
            <label for="apellidos"> Apellidos: </label>
            <input id="apellidos" class="form-control" type="text" name="apellidos">
            <label for="dui"> DUI: </label>
            <input id="dui" class="form-control" type="text" name="dui">
            <label for="direccion"> Direccion: </label>
            <input id="direccion" class="form-control" type="text" name="direccion">
            <label for="telefono"> Telefono: </label>
            <input id="direccion" class="form-control" type="text" name="direccion">
            <label for="email"> Email: </label>
            <input id="email" class="form-control" type="text" name="email">
            <button class="btn btn-primary" type="submit"> ENVIAR </button>
            </form >
        </div>
          </div>
        </div>
      </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>