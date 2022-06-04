<?php
    /* CONTROLLERS */
    require_once "controller/plantilla.controller.php";
    require_once "controller/conexion.controller.php";
    /* MODELS */
    require_once "model/conexionBD.php";
    require_once "model/dao/conexion.dao.php";

    /* CREAR UN OBJETO DE ARRANQUE */
    $objPlantilla = new PlantillaControler();
    $objPlantilla -> ctrPlantilla();
?>