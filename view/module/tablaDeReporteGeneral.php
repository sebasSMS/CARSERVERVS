<!doctype html>
<html lang="en">

<head>
  <title>Tabla de Reporte General</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="view/img/logoProyecto.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <!-- --------------dataTable css------------- -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <!-- diseño personalisado -->
  <link rel="stylesheet" href="view/css/DiseñoDeTablaReporteGeneral.css">
  <link rel="stylesheet" href="view/css/disenoDeMenu.css">
  <!-------alertas de javascript sweetalert2 -->
  <link rel="stylesheet" href="view/css/sweetalert2.min.css">
  <script src="view/js/sweetalert2.all.min.js"></script>
  <!-- extencion de iconos de el mini menu -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>

<body>

  <!-- Optional JavaScript -->



  <!-- ini menu -->
  <section class="menu menu--circle">
    <input type="checkbox" id="menu__active" />
    <label for="menu__active" class="menu__active">
      <div class="menu__toggle">
        <div class="icon">
          <div class="hamburger"></div>
        </div>
      </div>
      <input type="radio" name="arrow--up" id="degree--up-0" />
      <input type="radio" name="arrow--up" id="degree--up-1" />
      <input type="radio" name="arrow--up" id="degree--up-2" />
      <div class="menu__listings">
        <ul class="circle">
          <li>
            <div class="placeholder">
              <div class="upside">
                <a href="" class="button"><i class="fa fa-address-card"></i></a>
              </div>
            </div>
          </li>
          <li>
            <div class="placeholder">
              <div class="upside">
                <a href="index.php?ruta=vehiculos" class="button"><i class="fa fa-car"></i></a>
              </div>
            </div>
          </li>
          <li>
            <div class="placeholder">
              <div class="upside">
                <a href="#">&nbsp</a>
              </div>
            </div>
          </li>
          <li>
            <div class="placeholder">
              <div class="upside">
                <a href="view/module/unload.php" class="button"><i class="fa fa-sign-out"></i></a>
              </div>
            </div>
          </li>
          <li>
            <div class="placeholder">
              <div class="upside">
                <a href="index.php?ruta=cliente" class="button"><i class="fa fa-vcard"></i></a>
              </div>
            </div>
          </li>
          <li>
            <div class="placeholder">
              <div class="upside">
                <a href="index.php?ruta=tableUsuario" class="button"><i class="fa fa-table"></i></a>
                <a href="#" class="miniBoton"><i class="fa fa-vcard-o"></i></a>
              </div>
            </div>
          </li>
          <li>
            <div class="placeholder">
              <div class="upside">
                <a href="index.php?ruta=tableVehiculos" class="button"><i class="fa fa-table"></i></a>
                <a href="" class="miniBoton" id=""><i class="fa fa-car"></i></a>
              </div>
            </div>
          </li>
          <li>
            <div class="placeholder">
              <div class="upside">
                <a href="index.php?ruta=tableCliente" class="button"><i class="fa fa-table"></i> </a>
                <a href="#" class="miniBoton"><i class="fa fa-vcard"></i> </a>
              </div>
            </div>
          </li>
          <li>
            <div class="placeholder">
              <div class="upside">
                <a href="index.php?ruta=menuPrincipal" class="button"><i class="fa fa-user"></i></a>
              </div>
            </div>
          </li>
          <li>
            <div class="placeholder">
              <div class="upside">
                <a href="index.php?ruta=usuario" class="button"><i class="fa fa-vcard-o"></i></a>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="menu__arrow menu__arrow--top">
        <ul>
          <li>
            <label for="degree--up-0">
              <div class="arrow"></div>
            </label>
            <label for="degree--up-1">
              <div class="arrow"></div>
            </label>
            <label for="degree--up-2">
              <div class="arrow"></div>
            </label>
          </li>
        </ul>
      </div>
    </label>
  </section>

  <div class="container ">
    <h1 class="titulo">Tabla de Reporte General</h1>

    <table class="table table-hover" id="reporteGeneral">
      <thead>
        <tr>
          <th>IdServico</th>
          <th>Datos de Servico</th>
          <th>Punto de servico</th>
          <th>kilometraje</th>
          <th>Tecnico</th>
          <th>Descripcion</th>
          <th>Placa</th>
          <th>Funciones</th>

        </tr>
      </thead>
      <a name="" id="salir" class="btn btn-outline-success" href="index.php?ruta=reporteClientes" role="button"><img src="view/img/excel.png" width="60%" height="30%" alt=""></a>
      <tbody>
        <?php
        $objCtrServicio = new CotrellerReporte();
        $listaDeServicio = $objCtrServicio->ctrListarServicio();
        foreach ($listaDeServicio as $dato) {
          echo "
              <tr>
                <td>" . $dato["idServico"] . "</td>
                <td>" . $dato["DatosDeServico"] . "</td>
                <td>" . $dato["puntoDeServicio"] . "</td>
                <td>" . $dato["Kilometraje"] . "</td>
                <td>" . $dato["tecnico"] . "</td>
                <td>" . $dato["descripcion"] . "</td>
                <td>" . $dato["PLACA"] . "</td>
                <td>
                  <button type='button' class='btn btn-outline-primary' id='boton1' data-toggle='modal' data-target='#ModificarModal' onclick='modificar(this.parentElement.parentElement);' ><img src='view/img/editar.png' alt='' width='90%' height='50%'></button>
                  <button type='button' class='btn btn-outline-danger' id='boton2' onclick='eliminar(this.parentElement.parentElement);' ><img src='view/img/eliminar.png' alt='' width='90%' height='50%'></button>
                  <button type='button' class='btn btn-outline-success'id='boton3'><img src='view/img/inahabilitar.png' alt='' width='90%' height='50%'></button>
                </td>
              </tr>
              ";
        }
        ?>
      </tbody>
    </table>
    <!-- 
  elimar a reporte -->
    <?php
    if (isset($_GET['ELIMINAR'])) {
      $objCtrReporte = new CotrellerReporte;
      $objCtrReporte->ctrEliminarReporte();
    }
    ?>



  </div>
  <!-- ------------------------- modal de modificar --------->
  <div class="modal  fade" id="ModificarModal" tabindex="-1" aria-labelledby="ModificarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="modalC">
        <div class="modal-header">
          <h5 class="modal-title" id="ModificarModalLabel">Modificar cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post" class="" name="formulario" id="formulario">
          <div class="card-body mx-auto">
              <!-- campo para modificar codigo -->
              <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoKilometraje">
                <label for="pwd" class="subtitulos">IdModificar </label>
                <div class="negacion">
                  <input type="txt" class="form-control" name="txtMReporte" id="txtMReporte">

                </div>

              </div>
            <!--  campo para seleccionar placa -->
            <div class="form-groun  col-12 col-sm-6 col-md-6" id="grupoPlaca">
              <label for="" class="txt"> Placa:</label>
              <select name="txtMPlaca" id="txtMPlaca" class="form-control">
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
            <div class="form-groun  col-12 col-sm-6 col-md-6" id="grupoServico">
              <label for="pwd" class="subtitulos">Datos del servicio </label>
              <div class="negacion">
                <input type="txt" class="form-control" name="txtMServico" id="txtMServico">

              </div>

            </div>
            <div class="row">
              <div class="form-groun  col-12 col-sm-6 col-md-6" id="grupoPunto">
                <label for="" class="txt"> Punto Servico:</label>
                <select name="txtMPunto" id="txtMPunto" class="form-control">
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
              <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoKilometraje">
                <label for="pwd" class="subtitulos">kilometraje </label>
                <div class="negacion">
                  <input type="txt" class="form-control" name="txtMKilometraje" id="txtMKilometraje">

                </div>

              </div>
              <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoTecnico">
                <label for="" class="txt"> Tecnico:</label>
                <select name="txtMTecnico" id="txtMTecnico" class="form-control">
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
                <textarea class="form-control" name="txtMDescripcion" id="txtMDescripcion" rows="4" id="comment"></textarea>
              </div>
            </div>


            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" id="boton1">Guardar</button>
              <button type="button" class="btn btn-danger" id="boton2" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
          <?php
          /* modificar reporte */
            if (isset($_POST['txtMDescripcion'])){
              $objCtrReporte = new CotrellerReporte();
              $objCtrReporte-> ctrModificarReporte();
            }
          ?>
        </form>

      </div>
    </div>
  </div>

  <!-- Bootstrap CSS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-----------dataTable css--------- -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="cdn.datatables.net/plug-ins/1.12.1/i18n/es-CO.json"></script>
  <script>
    $(document).ready(function() {
      $('#reporteGeneral').DataTable({
        language: {
          search: "Reportes ",
          zeroRecords: "No hay resultados",
          previous: "Pr&eacute;c&eacute;dent"
        }
      });
    });
  </script>
  <script src="view/js/crud.Reporte.js"></script>
  <script src="view/js/validacion.js"></script>


</body>

</html>