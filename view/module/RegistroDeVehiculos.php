<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="view/img/logoProyecto.png" type="image/x-icon">
  <title>Creacion de Vehiculo </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/css/disenoDeMenu.css">
  <link rel="stylesheet" href="view/css/DiseñoDeVehiculo.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <!-------alertas de javascript sweetalert2 -->
  <link rel="stylesheet" href="view/css/sweetalert2.min.css">
  <script src="view/js/sweetalert2.all.min.js"></script>
</head>

<body>
  <!-- menu de navegacion -->
  <section class="menu menu--circle ">
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
  <h1 class="titulo col-12 col-sm-12 col-md-12 ">Registro de Vehivulo</h1>
  <div class="col-md-12">

    <div class="container ">
      <form action="" method="post" class="formulario" id="formulario">
        <div class="card-body mx-auto">
          <div class="row">
            <!-- campo de placa -->
            <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoPlaca">
              <label for="pwd" class="subtitulos">Placa </label>
              <div class="negacion">
                <input type="txt" class="form-control" name="txtPlaca" id="txtPlaca">
                <i class=" iconoDeError  fas fa-times-circle"></i>
              </div>
              <p class="error">La placa debe tener de 4 a 10 digitos y puede contener y guiones</p>

            </div>
            <!-- Campo de clase de vehiculo -->
            <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoClase">
              <label for="pwd" class="subtitulos">Clase </label>
              <div class="negacion">
                <input type="text" class="form-control" name="txtClase" id="txtClase">
                <i class=" iconoDeError  fas fa-times-circle"></i>

              </div>
              <p class="error">La clase tiene que ser de 4 a 16 dígitos y no puede contener numeros ni caracteres especiales.</p>

            </div>
          </div>
          <div class="row">
            <!-- campo de marca -->
            <div class="form-groun col-12 col-sm-6 col-md-6 " id="grupoMarca">
              <label for="pwd" class="subtitulos">Marca </label>
              <div class="negacion">
                <input type="text" class="form-control" name="txtMarca" id="txtMarca">
                <i class=" iconoDeError  fas fa-times-circle"></i>

              </div>
              <p class="error">la marca de vehiculo solo puede llevar numeros, letras y guiones</p>

            </div>
            <!-- Campo de modal -->
            <div class="form-groun col-12 col-sm-6 col-md-6 " id="grupoModelo">
              <label for="pwd" class="subtitulos">Modelo </label>
              <div class="negacion">
                <input type="text" class="form-control" name="txtModelo" id="txtModelo">
                <i class=" iconoDeError  fas fa-times-circle"></i>
              </div>
              <p class="error">El modelo del carros solo puede estar compuesto por numeros </p>

            </div>
          </div>
          <div class="row">
            <!-- Campo de numero clindraje -->
            <div class="form-groun col-12 col-sm-6 col-md-6 " id="grupoCilindraje">
              <label for="pwd" class="subtitulos">Cilindraje</label>
              <div class="negacion">
                <input type="text" class="form-control" name="txtCilindraje" id="txtCilindraje">
                <i class=" iconoDeError  fas fa-times-circle"></i>

              </div>

              <p class="error">El clidraje del carros solo puede estar compuesto por numeros </p>

            </div>
            <!-- campo de Numero de motor -->
            <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoNumero">
              <label for="pwd" class="subtitulos">Numero del Motor </label>
              <div class="negacion">
                <input type="text" class="form-control" name="txtNumeroDeMotor" id="txtNumeroDeMotor">
                <i class=" iconoDeError  fas fa-times-circle"></i>
              </div>
              <p class="error">El numero del carros solo puede estar compuesto por numeros </p>
            </div>
            <!-- campo de linea  -->

            <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoLinea">
              <label for="pwd" class="subtitulos">Linea </label>
              <div class="negacion">
                <input type="text" class="form-control" name="txtLinea" id="txtLinea">

                <i class=" iconoDeError  fas fa-times-circle"></i>
              </div>
              <p class="error">la linea de vehiculo solo puede llevar numeros, letras y guiones</p>


            </div>
            <!-- boto para listar clientes -->
            <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoLinea">
              <label for="pwd" class="subtitulos">Clientes </label>
              <div class="negacion">
              <select name="txtIdCliente" id="txtIdCliente" class="form-control" required>
                        <option value=""> Clientes:</option>
                        <?php
                          $objCtrVehiculo = new ControllerVehiculo();
                          $listaDeVehiculo = $objCtrVehiculo->ctrListarCedulaDeClientes();
                          foreach ($listaDeVehiculo as $dato) {
                            echo'<option value="'.$dato["CEDULA"].'"> '.$dato["CEDULA"].': '.$dato["NOMBRE"].' </option>';
                          }
                        ?>
                  </select>

              </div>
            </div>


          </div>
          <div class="botones col-12 col-sm-12 col-md-12 ">
            <button type="submit" class="btn btn-warning" id="boton4">Registras</button>

          </div>


        </div>
      </form>
      <!--Modal de cliente -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Usuario</th>
                  </tr>
                </thead>
                <tbody>
<!--                   
                    $objCtrVehiculo = new ControllerVehiculo();
                    $listaDeVehiculo = $objCtrVehiculo->ctrListarCedulaDeClientes();
                    foreach ($listaDeVehiculo as $dato) {
                    echo "
                    <tr>
                      <td>" . $dato["CEDULA"] . "</td>
                    </tr>
                    ";
                    }
                  ?> -->
                </tbody>

              </table>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
      <?php
      if (isset($_POST['txtPlaca'])) {
        $objCtrVehiculo = new ControllerVehiculo();
        $objCtrVehiculo->crtInsertarVehiculo(
          $_POST["txtPlaca"],
          $_POST["txtMarca"],
          $_POST["txtCilindraje"],
          $_POST["txtLinea"],
          $_POST["txtClase"],
          $_POST["txtModelo"],
          $_POST["txtNumeroDeMotor"],
          $_POST["txtIdCliente"]
        );
      }
      ?>



    </div>
  </div>
  <!-- Bootstrap CSS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-- archivos personales -->
  <script src="view/js/crud.Vehiculo.js"></script>
  <script src="view/js/formularioV.js"></script>
  <!-- libreria de iconos -->
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>

</html>