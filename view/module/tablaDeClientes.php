<!doctype html>
<html lang="en">

<head>
  <title>Tabla de Clientes</title>
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
                  <a href="RegistroDeVehiculos.html" class="button"><i class="fa fa-car"></i></a>
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
                  <a href="#" class="button"><i class="fa fa-commenting"></i></a>
                </div>
              </div>
            </li>
            <li>
              <div class="placeholder">
                <div class="upside">
                  <a href="creacionDeCliente.html" class="button"><i class="fa fa-vcard"></i></a>
                </div>
              </div>
            </li>
            <li>
              <div class="placeholder">
                <div class="upside">
                  <a href="tablaDeEmpleados.html" class="button"><i class="fa fa-table"></i></a>
                  <a href="#" class="miniBoton"><i class="fa fa-vcard-o"></i></a>
                </div>
              </div>
            </li>
            <li>
              <div class="placeholder">
                <div class="upside">
                  <a href="tablaDeVehiculos.html" class="button"><i class="fa fa-table"></i></a>
                  <a href="" class="miniBoton" id=""><i class="fa fa-car"></i></a>
                </div>
              </div>
            </li>
            <li>
              <div class="placeholder">
                <div class="upside">
                  <a href="tablaDeUsuario.html" class="button"><i class="fa fa-table"></i> </a>
                  <a href="#" class="miniBoton"><i class="fa fa-vcard"></i> </a>
                </div>
              </div>
            </li>
            <li>
              <div class="placeholder">
                <div class="upside">
                  <a href="administracionDeUsuario.html" class="button"><i class="fa fa-user"></i></a>
                </div>
              </div>
            </li>
            <li>
              <div class="placeholder">
                <div class="upside">
                  <a href="creUsuario.html" class="button"><i class="fa fa-vcard-o"></i></a>
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
        <a name="" id="salir" class="btn btn-outline-success"  href="index.php?ruta=reporte" role="button" ><img src="view/img/excel.png" width="60%" height="30%" alt=""></a>
        <tbody>
        <?php
          $objCtrCtrClientes = new ControllerCliente();
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
            
          }  
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