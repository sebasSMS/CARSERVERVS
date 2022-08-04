<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gestion de serviteca</title>

  <!--------bootstrap css-------->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- iconos de bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!------------ css personal---------- -->
  <link rel="stylesheet" href="view/css/diseñoReporteV.css">
  <link rel="stylesheet" href="view/css/disenoDeMenu.css">
  <!-------alertas de javascript sweetalert2 -->
  <link rel="stylesheet" href="view/css/sweetalert2.min.css">
  <script src="view/js/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <!-- DIRECCION PARA LOGOS EN CLOUDFLARE                    -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">


  <head>

  <body>

    <h1 class="titulo col-12 col-sm-12 col-md-12 ">Gestion de serviteca</h1>

    <div class="container">

      <form action="" method="post" class="" name="formulario" id="formulario">
        <div class="card-body mx-auto">
          <!--  campo para seleccionar placa -->
          <div class="form-groun  col-12 col-sm-6 col-md-4" id="grupoPlaca">
            <label for="" class="txt"> Placa:</label>
            <select name="txtPlaca" id="txtPlaca" class="form-control">
              <option value=""> Seleccione la placa </option>
              <?php
              $objReporte = new CotrellerReporte();
              $lista =  $objReporte->ctrListarPlaca();
              foreach ($lista as $dato) {
                echo '<option value="' . $dato["PLACA"] . '"> ' . $dato["PLACA"] . ' </option>';
              }
              ?>

            </select>

          </div>
          <!-- campo para insertar el dato del sevicio -->
          <div class="form-groun  col-12 col-sm-6 col-md-4" id="grupoServico">
            <label for="pwd" class="subtitulos">datos del servicio </label>
            <div class="negacion">
              <input type="txt" class="form-control" name="txtServico" id="txtServico">

            </div>

          </div>
          <div class="row">
            <div class="form-groun  col-12 col-sm-6 col-md-4" id="grupoPunto">
              <label for="" class="txt"> Punto Servico:</label>
              <select name="txtPunto" id="txtPunto" class="form-control">
                <option value=""> Seleccione el punto </option>
                <?php
                $objReporte = new CotrellerReporte();
                $lista =  $objReporte->ctrListarPuntoDeservico();
                foreach ($lista as $dato) {
                  echo '<option value="' . $dato["idPuntoDeServico"] . '"> ' . $dato["punto"] . ' </option>';
                }
                ?>

              </select>

            </div>
            <div class="form-groun col-12 col-sm-6 col-md-4" id="grupoKilometraje">
              <label for="pwd" class="subtitulos">kilometraje </label>
              <div class="negacion">
                <input type="txt" class="form-control" name="txtKilometraje" id="txtKilometraje">

              </div>

            </div>
            <div class="form-groun col-12 col-sm-6 col-md-4" id="grupoTecnico">
              <label for="" class="txt"> Tecnico:</label>
              <select name="txtTecnico" id="txtTecnico" class="form-control">
                <option value=""> Seleccione el tecnico </option>
                <?php
                $objReporte = new CotrellerReporte();
                $lista =  $objReporte->ctrListarTecnicos();
                foreach ($lista as $dato) {
                  echo '<option value="' . $dato["CEDULA"] . '"> ' . $dato["CEDULA"] . ' </option>';
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-groun col-12 col-sm-12 col-md-12" id="grupoDescripcion">
            <label for="pwd" class="subtitulos">Descripcion de la Solicitud </label>
            <br>
            <div class="negacion">
              <textarea class="form-control" name="txtDescripcion" id="txtDescripcion" rows="9" id="comment"></textarea>
            </div>
          </div>


          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="boton1">Guardar</button>
            <button type="button" class="btn btn-danger" id="boton2" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
        <?php

        if (isset($_POST["txtPunto"])) {
          $objReporte = new CotrellerReporte();
          $objReporte-> crtInsertarReporteGeneral(
            $_POST["txtServico"],
            $_POST["txtPunto"],
            $_POST["txtKilometraje"],
            $_POST["txtTecnico"],
            $_POST["txtDescripcion"],
            $_POST["txtPlaca"]
          );
      
        }
        ?>
      </form>
    </div>

    <!--    <script src="view/js/crud.Clientes.js"></script> -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    </div>
  </body>

</html>