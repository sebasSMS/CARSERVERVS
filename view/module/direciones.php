<?php
    if (isset($_GET['ruta'])){
        switch ($_GET['ruta']) {
            case 'registros':
                require_once "view/module/creacionDeCliente.php";
                break;
            case 'proveedor':
                require_once "view/module/proveedor.php";
                break;
            case 'usuario':
                require_once "view/module/usuario.php";
                break;
            default:
                require_once "view/module/menuPrincipal.php";
                break;
        }
    }else{
        require_once "view/module/menuPrincipal.php";
    }
?>