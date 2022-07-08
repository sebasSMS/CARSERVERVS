<?php
    session_start(); //ACTIVAR LAS SESIONES
    class PlantillaControler{
        public function ctrPlantilla(){

            if ( isset($_SESSION["login"]) and $_SESSION["login"] == true){
                include_once "view/module/direciones.php";   
            }else{
                include_once "view/module/login.php";
            }
        }
    }
?>