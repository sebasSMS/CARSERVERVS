<?php
    /* CONTROLLERS */
    require_once "controller/plantilla.controller.php";
    require_once "controller/conexion.controller.php";
    require_once "controller/cliente.controller.php";
    require_once "controller/usuario.controller.php";
    require_once "controller/vehiculo.controller.php";
    require_once "controller/reporteGeneral.controller.php";
    require_once "controller/clsMail.php";
    /* MODELS */
    require_once "model/conexionBD.php";
    require_once "model/dao/conexion.dao.php";

    require_once "model/dao/cliente.dao.php";
    require_once "model/dto/cliente.dto.php";

    require_once "model/dto/usuario.dto.php";
    require_once "model/dao/usuario.dao.php";

    require_once "model/dao/vehiculo.dao.php";
    require_once "model/dto/vehiculo.dto.php";

    require_once "model/dao/reporteGeneral.dao.php";
    require_once "model/dto/reporteGeneral.dto.php";

    /* llamamos la librerias que nesecitamos para recordar la conreaseña */
    require_once "view/PHPMailer/Exception.php";
    require_once "view/PHPMailer/PHPMailer.php";
    require_once "view/PHPMailer/SMTP.php";



    
    /* CREAR UN OBJETO DE ARRANQUE */
    $objPlantilla = new PlantillaControler();
    $objPlantilla -> ctrPlantilla();
?>