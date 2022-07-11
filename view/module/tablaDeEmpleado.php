<!doctype html>
<html lang="en">

<head>
  <title>Tabla de Empleados</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- --------------dataTable------------- -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="view/css/DiseñoDeTablaDeEmpleados.css">
  <link rel="stylesheet" href="view/css/disenoDeMenu.css">
  <!---- bootstrap iconos  -->
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
  <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
</svg>

</head>

<body>

  <!-- Optional JavaScript -->

  

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
                    <a href="view/module/unload.php"  class="button"><i class="fa fa-sign-out"></i></a>
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
                    <a href="" class="miniBoton" id=""><i class="fa fa-car" ></i></a>
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
      <h1 class="titulo">Tabla de Clientes</h1>
      
      <table class="table table-hover" id="example">
        <thead>
          <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Rol</th>

          </tr>
        </thead>
        <a name="" id="" class="btn btn-primary" href="index.php?ruta=reporte" role="button">e
        </a>
        <tbody>
        <?php
          /* $objCtrCtrClientes = new ControllerCliente();
          $listaDeClientes = $objCtrCtrClientes -> ctrListarCliente();
        foreach($listaDeClientes as $dato){
          echo"
          <tr>
            <td>".$dato["CEDULA"]."</td>
            <td>".$dato["NOMBRE"]."</td>
            <td>".$dato["APELLIDO"]."</td>
            <td>".$dato["CORREO"]."</td>
            <td>".$dato["CELULAR"]."</td>
            <td>".$dato["PLACA"]."</td>
            
          </tr>
          ";
          
        }  */
        ?>
        </tbody>
      </table>
    </div>

  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="cdn.datatables.net/plug-ins/1.12.1/i18n/es-CO.json"></script>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
  

</body>

</html>