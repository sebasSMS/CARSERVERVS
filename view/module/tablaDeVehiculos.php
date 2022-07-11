<!doctype html>
<html lang="en">
  <head>
    <title>Tabla de Usuario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/disenoDeMenu.css">
    <link rel="stylesheet" href="css/DiseñoDeTablaDeEmpleados.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <h1 class="titulo">Tabla de Usuario</h1>
    <div>     
      <label for="uname"  class="cedula"> Cedula </label>
      <input type="text" class="form-control" id= "Usuario"  name="Usuario" >
  </div>
  <table  class="table table-hover" > 
    <thead>
      <tr>
        <th>Placa</th>
        <th>Clase de Vehiculo</th>
        <th>Marca de Vehiculo</th>
        <th>Numero de cilindraje</th>
        <th>Lina de Vehiculo</th>
        <th>Modelo de Vehiculo</th>
        <th>Numero del Motor</th>


      </tr>
    </thead>
    <tbody>
      <tr>
        <td  >13456</td>
        <td>John</td>
        <td>caq</td>
        <td>john@example.com</td>
        <td>421713</td>
        <td>GLU 13U</td>
        <td>NDJS 35345</td>
      </tr>
      <tr>
        <td>13456</td>
        <td>John</td>
        <td>caq</td>
        <td>john@example.com</td>
        <td>421713</td>
        <td>GLU 13U</td>
        <td>NDJS 35345</td>
      </tr>
      
      <tr>
        <td>356921</td>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>421713</td>
        <td>GLU 13U</td>
        <td>NDJS 35345</td>

      </tr>
      <tr>
        <td>145632</td>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>421713</td>
        <td>GLU 13U</td>
        <td>NDJS 35345</td>
      </tr>
      <tr>
        <td>45223455</td>
        <td>Pablo</td>
        <td>Ramires</td>
        <td>pablo@example.com</td>
        <td>421713</td>
        <td>GLU 13U</td>
        <td>NDJS 35345</td>
      </tr>
      <tr>
        <td>65474334</td>
        <td>Sebastian</td>
        <td>Montes</td>
        <td>Sebastian@example.com</td>
        <td>421713</td>
        <td>GLU 13U</td>
        <td>NDJS 35345</td>
      </tr>
      
    </tbody>
  </table>
  </div> 

  </body>
</html>

  <ñkjhgfdsa/body>
</html>