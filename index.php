<?php
    /* CONTROLLERS */
    require_once "controller/plantilla.controller.php";
    require_once "controller/conexion.controller.php";
    require_once "controller/cliente.controller.php";
    require_once "controller/usuario.controller.php";
    require_once "controller/vehiculo.controller.php";
    /* MODELS */
    require_once "model/conexionBD.php";
    require_once "model/dao/conexion.dao.php";
    require_once "model/dao/cliente.dao.php";
    require_once "model/dto/cliente.dto.php";
    require_once "model/dto/usuario.dto.php";
    require_once "model/dao/usuario.dao.php";
    require_once "model/dao/vehiculo.dao.php";
    require_once "model/dto/vehiculo.dto.php";
    
    /* CREAR UN OBJETO DE ARRANQUE */
    $objPlantilla = new PlantillaControler();
    $objPlantilla -> ctrPlantilla();
?>