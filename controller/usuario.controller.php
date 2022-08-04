<?php
    class ControllerUsuario{
        /* funcion para insertar el usuario */
        public function crtInsertarUsuario($cedula,$nombre,$apellido,$celular,$correo,$rol){

            $objDtoUsuario = new Usuario($cedula,$nombre,$apellido,$celular,$correo,$rol);
            $objDaoUsuario = new ModelUsuario($objDtoUsuario);
            if ($objDaoUsuario -> mldInsertarUsuario()){
                echo"
                <script>
                Swal.fire({
                    title: 'GOOD',
                    text: ' USUARIO INSERTADO',
                    icon: 'success',
                    timerProgressBar:true,
                    timer:4000,
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?ruta=tableUsuario';
                    }else{
                        window.location='index.php?ruta=tableUsuario';
                    }
                  })
                </script>
                ";

            }else{
                echo "cliente no insertado";
            }
            


        }/* fin de la funcion */
        /* funcion para mostrar el rol */
        public function ctrMostrarRol(){ 
            $lista = false;
            try {
                $objDtoUsuario = new Usuario(NULL,NULL,NULL,NULL,NULL,NULL);
                $objDaoUsuario = new ModelUsuario( $objDtoUsuario );
                $lista = $objDaoUsuario -> mdlMostrarRol() -> fetchAll();

            } catch (PDOException $e) {
                echo "error al mostrar los Roles de usuarios" . $e -> getMessage();
            }
            return $lista;
        }/* fin de la funcion */
        public function ctrListarUsuario(){
            $array = false; 
            try {
                $objDtoUsuario = new Usuario(null,null,null,null,null,null);
                $objDaoUsuario = new ModelUsuario($objDtoUsuario);
                $array =  $objDaoUsuario -> mdlListarUsuario() -> fetchALL();
            } catch (\Throwable $e) {
                echo"Error en el controlador $e";
            }
            return $array;

        }/* fin de la funcion */
        public function ctrModificarUsuario(){
            $ojbDtoUsuario = new Usuario(
                $_POST['txtMCedula'],
                $_POST['txtMNombre'],
                $_POST['txtMApellido'],
                $_POST['txtMCelular'],
                $_POST['txtMCorreo'],
                $_POST['txtMRol']
                

            );
    

            $ojbDaoUsuario = new ModelUsuario($ojbDtoUsuario);
            if ($ojbDaoUsuario -> mdlModificarUsuario()==  true){

                echo"
                    <script>
                    Swal.fire({
                        title: 'EXTIO',
                        text: 'SU USUARIO A SIDO MODIFICADO CON EXITO',
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location='index.php?ruta=tableUsuario';
                        }else{
                            window.location='index.php?ruta=tableUsuario';
                        }
                      })
                    </script>
                    ";
            }else{
                echo "<script>
                    Swal.fire(
                        'GOOD',
                        'Usuario no se pudo Modificado',
                        'danger'
                      )
                    ;</script>
                    ";
            }
        }/* fin de la funcion */
        public function ctrEliminarUsuario(){
            $ojbDtoUsuario = new Usuario(
                $_GET['eliminar'],
                null,
                null,
                null,
                null,
                null


            );

            $ojbDaoUsuario = new ModelUsuario($ojbDtoUsuario);
            ($ojbDaoUsuario -> mdlEliminarUsuarios());
            echo"<script>
                window.location='index.php?ruta=tableUsuario';
            </script>";

      
        }/* fin de la funcion */
        /*funcion para recordar contraseña */
        public function crtValidarInformacion($cedula,$correo){

            try {
                $objDtoUsuario = new Usuario($cedula,NULL,NULL,NULL,$correo,NULL);
                $objDaoUsuario = new ModelUsuario($objDtoUsuario);
                $resultado = $objDaoUsuario -> mdlValidarInformacion() -> fetch();
                if(gettype($resultado) != "boolean"){
                    $mailSend = new clsMail();
                    $objDaoUsuario = new ModelUsuario($objDtoUsuario);
                    $lista1= $objDaoUsuario->mdlMostrarDatosDeUsuario()->fetchAll();
                    $lista2 = $objDaoUsuario->mdlMostrarDatosPersonalesDeUsuario()->fetchAll();

                    foreach($lista1 as $dato){
                        $datoP[0] = ''.$dato['CLAVE'].'';
                    }

                    foreach($lista2 as $dato){
                        $datoP[1] = ''.$dato['NOMBRE'].'';
                        $datoP[2] = ''.$dato['APELLIDO'].'';
                    }
                    
                    $titulo ="Car Servicer V.S";
                    $asunto ="Recordar Contraseña";
                    $bodyHTML = '
                        <style>

                        </style>
                        <h1 class="titulo"><em>Car Service V.S </em> </h1>
                        <br>
                        <hr>
                        <h2> <b> Hola '.$datoP[1].' '.$datoP[2].' </b> </h2>
                        <h2> Hemos recibido una solicitud para recordar la contraseña lo, </h2>
                        <h2> hacemos  mas facil por ti.</h2>
                        <br>
                        <h2 > Tu contraseña es <b>( '.$datoP[0].' )</b> </h2>
                        <br>
                        <hr>
                        <mark>
                            <h2> Gracias</h2>
                            <h2> El equipo de Car Servicer V.S le informa que si no solicitaste la recordar la contraseña</h2>
                            <h2> ignora este correo o comunicate con nuestro centro de ayuda</h2>
                        </mark>
                    ';
                    $enviado = $mailSend->metEnviar($titulo,$correo,$asunto,$bodyHTML);
    
                    if($enviado){
                        
                        echo"
                        <script>
                        Swal.fire({
                            title: 'GOOD',
                            text: ' LA CONTRASEÑA FUE ENVIADA AL CORREO PERSONAL',
                            icon: 'success',
                            timerProgressBar:true,
                            timer:4000,
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ok!'
                          }).then((result) => {
                            if (result.isConfirmed) {
                                window.location='index.php?ruta=login.php';
                            }else{
                                window.location='index.php?ruta=login.php';
                            }
                          })
                        </script>
                        ";
                    }else{
                        echo "<script>alert('No se envió correo');</script>";
                    }       
                }else{
                    echo"<script>alert('el Usuario no existe'); </script>";
                }
            } catch ( PDOException $e) {
                echo "Error en el controlador crtValidarInformacion  " .$e -> getMessage();
                
            }

        }/* fin de la funcion */
    }
