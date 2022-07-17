<!doctype html>
<html lang="en">

<head>
  <title>Tabla de Empleados</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="view/css/diseñoReporteV.css">

  <head>

  <body>

    <h1 class="titulo col-12 col-sm-12 col-md-12 ">Gestion de serviteca</h1>

    <div class="container">

      <form action="" method="post" class="" name="formulario" id="formulario">
        <div class="card-body mx-auto">
          <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoPlaca">
            <label for="pwd" class="subtitulos"> Placa </label>
            <div class="negacion">
              <input type="txt" class="form-control" name="txtplaca" id="txtplaca">

            </div>

          </div>
          <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoServico">
            <label for="pwd" class="subtitulos">datos del servico </label>
            <div class="negacion">
              <input type="txt" class="form-control" name="txtServico" id="txtServico">

            </div>

          </div>
          <div class="row">
            <div class="form-groun col-12 col-sm-6 col-md-4" id="grupoPunto">
              <label for="pwd" class="subtitulos">Punto de Punto </label>
              <div class="negacion">
                <input type="txt" class="form-control" name="txtPunto" id="txtPunto">

              </div>

            </div>
            <div class="form-groun col-12 col-sm-6 col-md-4" id="grupoKilometraje">
              <label for="pwd" class="subtitulos">kilometraje </label>
              <div class="negacion">
                <input type="txt" class="form-control" name="txtCelular" id="txtCelular">

              </div>

            </div>
            <div class="form-groun col-12 col-sm-6 col-md-4" id="grupoTecnico">
              <label for="pwd" class="subtitulos">Tecnico </label>
              <div class="negacion">
                <input type="txt" class="form-control" name="txtCelular" id="txtCelular">

              </div>

            </div>
          </div>
          <div class="form-groun col-12 col-sm-12 col-md-12" id="grupoDescripcion">
            <label for="pwd" class="subtitulos">Descripcion de la Solicitud </label>
            <br>
            <div class="negacion">
              <textarea class="form-control" rows="9" id="comment"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-primary" id="boton1">Guardar</button>
            <button type="button" class="btn btn-outline-danger" id="boton2" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </form>
    </div>
    </div>
  </body>

</html>