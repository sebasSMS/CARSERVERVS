<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de cliente </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/DiseñoDeCliente.css">
    <link rel="stylesheet" href="css/disenoDeMenu.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
</head>
<body>
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
                    <a href="" class="miniBoton" id=""><i class="fa fa-car" ></i></a>
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

    <div>
      <h1 class="titulo">Registro de Clientes</h1>
        
        <div>     
            <label for="uname"  class="cedula"> Cedula  </label>
            <input type="text" class="form-control" id= "Usuario"  name="Usuario"  placeholder="Cedula"   >
        </div>
        <div class="container">
            <form action="" method="get" class="" id="formulario">
                <div class="form-groun  " >
                    <label for="pwd" class="subtitulos">Nombre  </label>
                    <div class="campos">
                        <input type="text" class="form-control" name="nombre" id="">
                        <i class="negacion" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" id="iconoDeError" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                            </svg>

                        </i>

                        <p class="error">Por favor ingrese el nombre</p>

                    </div>
                
                </div>
                <div class="form-groun">
                    <label for="pwd" class="subtitulos">Apellido </label>
                    <div class="campos">
                        <input type="text" class="form-control" name="Apellido" id="">
                        <i class="negacion" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" id="iconoDeError" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                            </svg>

                        </i>
                        <p class="error">Por favor ingrese los apellidos</p>

                    </div>
                    
                </div>
                <div class="form-groun">
                    <label for="pwd" class="subtitulos">Documento de identidad </label>
                    <div class="campos">
                        <input type="number" class="form-control" name="Documento" id="">
                        <i class="negacion" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" id="iconoDeError" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                            </svg>

                        </i>

                    </div>
                    <p class="error">Por favor ingrese el documento de identidad</p>
                </div>
                <div class="form-groun">
                    <label for="pwd" class="subtitulos"> Correo electronico </label>
                    <div class="campos">
                        <input type="email" class="form-control" name="Correo" id="">
                        <i class="negacion" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" id="iconoDeError" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                            </svg>

                        </i> 
                    </div>
                    <p class="error">Por favor ingrese el correo electronico</p>
                   
                </div>
                <div class="form-groun">
                    <label for="pwd" class="subtitulos"> Numero de cedula </label>
                    <div class="campos">
                        <input type="number" class="form-control" name="N_C" id="">
                        <i class="negacion" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" id="iconoDeError" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                            </svg>

                        </i>
                        <p class="error">Por favor ingrese el numero de cedula</p>

                    </div>
                    
                </div>
                <div class="form-groun  " >
                    <label for="pwd" class="subtitulos">placa  </label>
                    <div class="campos">
                        <input type="text" class="form-control" name="placa" id="">
                        <i class="negacion" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" id="iconoDeError" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                            </svg>

                        </i>

                        <p class="error">Por favor ingrese la placa</p>

                    </div>
                
                </div>
                <div class="formurMensajes" id="formurMensajes">
                    <i class="negacion" id="mensajeDeError">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" id="menERR" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                        <b>Error:</b> por favor rellene el formulario correctamente

                    </i>
                    
                </div>
                


            </form>
            <div class="botones">
                <button type="button" class="btn btn-outline-primary" id="boton1">Actualizar</button>
                <button type="button" class="btn btn-outline-danger" id="boton2">Eliminar</button>
                <button type="button" class="btn btn-outline-success"id="boton3">inahabilitar</button>
                <button type="button" class="btn btn-outline-warning" id="boton4">Registras</button>

            </div>
            
       
        </div>

    </div>
    
    
    
</body>
</html>