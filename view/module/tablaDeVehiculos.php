<!doctype html>
<html lang="en">

<head>
  <title>Tabla de Usuario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- --------------dataTable------------- -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="view/css/DiseñoDeTablaDeVehiculos.css">
  <link rel="stylesheet" href="view/css/disenoDeMenu.css">
  <!-- extencion de iconos de el mini menu -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <!-------alertas de javascript sweetalert2 -->
  <link rel="stylesheet" href="view/css/sweetalert2.min.css">
  <script src="view/js/sweetalert2.all.min.js"></script>
  <script src="view/js/sweetalert2.all.min.js"></script>
</head>

<body>

  <!-- Optional JavaScript -->
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

  <div class="container mt-3">
    <h1 class="titulo">Tabla de Vehculo</h1>
    <table class="table table-hover" id="vehiculo">
      <thead>
        <tr>
          <th>Placa</th>
          <th>Clase</th>
          <th>Marca </th>
          <th>Cilindraje </th>
          <th>Lina </th>
          <th>Modelo </th>
          <th>Numero del Motor</th>
          <th>Funciones</th>


        </tr>
      </thead>
      <a name="" id="salir" class="btn btn-outline-success" href="index.php?ruta=reporteVehiculo" role="button"><img src="view/img/excel.png" width="60%" height="30%" alt=""></a>
      <tbody>
        <?php
        $objCtrCtrVehiculo = new ControllerVehiculo();
        $listaDeVehiculo = $objCtrCtrVehiculo->ctrListarVehiculo();
        foreach ($listaDeVehiculo as $dato) {
          echo "
          <tr>
            <td>" . $dato["PLACA"] . "</td>
            <td>" . $dato["MARCA"] . "</td>
            <td>" . $dato["CILINDRAJE"] . "</td>
            <td>" . $dato["LINEA"] . "</td>
            <td>" . $dato["CLASE"] . "</td>
            <td>" . $dato["MODELO"] . "</td>
            <td>" . $dato["NUMERO MOTOR"] . "</td>
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
      <?php
      if (isset($_GET['eliminar'])) {
        $objCtrVehiculo = new ControllerVehiculo;
        $objCtrVehiculo->ctrEliminarVehiculo();
      }
      ?>
    </table>
    <div class="modal  fade" id="ModificarModal" tabindex="-1" aria-labelledby="ModificarModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" id="modalC">
          <div class="modal-header">
            <h5 class="modal-title" id="ModificarModalLabel">Modificar cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post" class="formulario" id="formulario">
            <div class="card-body mx-auto">
              <div class="row">
                <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoPlaca">
                  <label for="pwd" class="subtitulos">Placa </label>
                  <div class="negacion">
                    <input type="txt" class="form-control" name="txtMPlaca" id="txtMPlaca">

                  </div>


                </div>
                <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoClase">
                  <label for="pwd" class="subtitulos">Clase </label>
                  <div class="negacion">
                    <input type="text" class="form-control" name="txtMClase" id="txtMClase">


                  </div>


                </div>
              </div>
              <div class="row">
                <div class="form-groun col-12 col-sm-6 col-md-6 " id="grupoMarca">
                  <label for="pwd" class="subtitulos">Marca </label>
                  <div class="negacion">
                    <input type="text" class="form-control" name="txtMMarca" id="txtMMarca">


                  </div>


                </div>
                <div class="form-groun col-12 col-sm-6 col-md-6 " id="grupoModelo">
                  <label for="pwd" class="subtitulos">Modelo </label>
                  <div class="negacion">
                    <input type="text" class="form-control" name="txtMModelo" id="txtMModelo">

                  </div>


                </div>
              </div>
              <div class="row">
                <div class="form-groun col-12 col-sm-6 col-md-6 " id="grupoCilindraje">
                  <label for="pwd" class="subtitulos">Cilindraje</label>
                  <div class="negacion">
                    <input type="text" class="form-control" name="txtMCilindraje" id="txtMCilindraje">


                  </div>



                </div>
                <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoNumero">
                  <label for="pwd" class="subtitulos">Numero del Motor </label>
                  <div class="negacion">
                    <input type="text" class="form-control" name="txtMNumeroDeMotor" id="txtMNumeroDeMotor">

                  </div>

                </div>

                <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoLinea">
                  <label for="pwd" class="subtitulos">Linea </label>
                  <div class="negacion">
                    <input type="text" class="form-control" name="txtMLinea" id="txtMLinea">


                  </div>

                </div>

              </div>


            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-primary" id="boton1">Actualizar</button>
              <button type="button" class="btn btn-outline-danger" id="boton2" data-dismiss="modal">Close</button>
            </div>
            <?php
            /* modificar Vehiculo */

            if (isset($_POST['txtMPlaca'])) {
              $objCtrVehiculo = new ControllerVehiculo();
              $objCtrVehiculo->ctrModificarVehiculo();
            }
            ?>
          </form>

        </div>
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
  <!--   archivo de js para mostrar lso datos a modificar -->
  <script src="view/js/crud.Vehiculo.js"></script>
  <script>
    $(document).ready(function() {
      $('#vehiculo').DataTable({
        language: {
          search: "Vehiculo ",
          zeroRecords: "No hay resultados",
          previous: "Pr&eacute;c&eacute;dent"

        }
      });
    });
  </script>

</body>

</html>