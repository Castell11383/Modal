<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    #button {
      margin-top: 25%;
      margin-left: 45%;
      margin-bottom: 25%;

    }

    body {
      background-color: antiquewhite;
      background-image: url(/Fondo1.webp);
      background-size: 1900px;
    }

    .container{
      border: 2px;
      border-style: inset;
      background-color: black;
    }

  </style>
</head>

<body>

  <div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="button">
      Desplegar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ejemplo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Ingreses sus datos
            <div class="container">
              <select class="form-select" aria-label="Default select example" placeholder="Grado">
                <option value="1">Subteniente</option>
                <option value="2">Teniente</option>
                <option value="3">Capitán Segundo</option>
                <option value="3">Capitán Primero</option>
                <option value="3">Mayor</option>
                <option value="3">Tte. Coronel</option>
                <option value="3">Coronel</option>
              </select>
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" id="inputPassword5" class="form-control" placeholder="Nombre">
              <label for="apellido" class="form-label">Apellido:</label>
              <input type="text" id="inputPassword5" class="form-control" placeholder="Apellido">
              <label for="catalogo" class="form-label">Catálogo:</label>
              <input type="number" id="inputPassword5" class="form-control" placeholder="x x x x x x x">
              <label for="catalogo" class="form-label">Telefono:</label>
              <input type="number" id="inputPassword5" class="form-control" placeholder="x x x x - x x x x">

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Siguiente</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>