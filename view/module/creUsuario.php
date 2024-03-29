<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="view/img/logoProyecto.png" type="image/x-icon">
  <title>Creacion de Usuario</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-------alertas de javascript sweetalert2 -->
  <link rel="stylesheet" href="view/css/sweetalert2.min.css">
  <script src="view/js/sweetalert2.all.min.js"></script>
 <!--   diseño de css personales -->
  <link rel="stylesheet" href="view/css/DiseñoCreUsuario.css">
  <link rel="stylesheet" href="view/css/disenoDeMenu.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>

<body>
  <div>
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

    <div class="col-md-12">
      <h1 class="titulo col-12 col-sm-12 col-md-12 ">Registro de Usuario</h1>
      <div class="container ">
      <form action="" method="post" class="" name="formulario" id="formulario">
        <div class="card-body mx-auto">
          <div class="row">
            <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoCedula">
              <label for="pwd" class="subtitulos">Cedula </label>
              <div class="negacion">
                <input type="number" class="form-control" name="txtCedula" id="txtCedula">
                <i class=" iconoDeError  fas fa-times-circle"></i>
              </div>
              <p class="error">La cedula debe tener de 7 a 10 digitos y no puede contener ni letras ni caracteres especiales</p>

            </div>

            <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoCorreo">
              <label for="pwd" class="subtitulos">Correo </label>
              <div class="negacion">
                <input type="email" class="form-control" name="txtCorreo" id="txtCorreo">
                <i class=" iconoDeError  fas fa-times-circle" id="negacion"></i>

              </div>
              <p class="error">Por favor ingrese el correo </p>

            </div>
          </div>
          <div class="row">
            <div class="form-groun col-12 col-sm-6 col-md-6 " id="grupoNombre">
              <label for="pwd" class="subtitulos">Nombre </label>
              <div class="negacion">
                <input type="text" class="form-control" name="txtNombre" id="txtNombre">
                <i class="  iconoDeError fas fa-times-circle"></i>

              </div>
              <p class="error">El usuario tiene que ser de 4 a 16 dígitos y no puede contener numeros y ni caracteres especiales.</p>

            </div>
            <div class="form-groun col-12 col-sm-6 col-md-6" id="grupoCelular">
              <label for="pwd" class="subtitulos">Celular </label>
              <div class="negacion">
                <input type="number" class="form-control" name="txtCelular" id="txtCelular">
                <i class="  iconoDeError fas fa-times-circle"></i>

              </div>
              <p class="error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>

            </div>
          </div>
          <div class="row">
            <div class="form-groun col-12 col-sm-6 col-md-6 " id="grupoApellido">
              <label for="pwd" class="subtitulos">Apellido</label>
              <div class="negacion">
                <input type="text" class="form-control" name="txtApellido" id="txtApellido" >
                <i class="  iconoDeError fas fa-times-circle"></i>

              </div>
              <p class="error">El apellido tiene que ser de 4 a 16 dígitos y no puede contener numeros y ni caracteres especiales.</p>

            </div>
            <div class="form-groun col-12 col-sm-6 col-md-6 " id="grupoApellido">
            <label for="" class ="txt">Rol:</label>
                  <select name="txtRol" id="txtRol" class="form-control" required>
                        <option value=""> Seleccione Rol </option>
                        <?php
                            $objCtrUsuario = new ControllerUsuario();
                            $listaUsuario = $objCtrUsuario -> ctrMostrarRol();  
                            foreach($listaUsuario as $dato){
                                echo'<option value="'.$dato["idRol"].'"> '.$dato["NOMBRE"].' </option>';
                            }
                        ?>
                    
                  </select>


            </div>


        
          </div>


          <div class="botones col-12 col-sm-12 col-md-12  ">
            <button type="submit" class="btn btn-warning" id="boton4">Registras</button>

          </div>

        </div>
      </form>
        <?php
        if (isset($_POST["txtCedula"])) {
          $objCtrUsuario = new ControllerUsuario();
          $objCtrUsuario->crtInsertarUsuario(
            $_POST["txtCedula"],
            $_POST["txtNombre"],
            $_POST["txtApellido"],
            $_POST["txtCelular"],
            $_POST["txtCorreo"],
            $_POST["txtRol"]
            


          );
        }
        ?>
        
      </div>



    </div>


  </div>

  <script src="view/js/crud.Usuario.js"></script>
  <script src="view/js/formulariosU.js"></script>

  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>

</html>