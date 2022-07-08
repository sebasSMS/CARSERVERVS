<?php
    
    
    if (isset($_GET['ruta'])){
        switch ($_GET['ruta']) {
            /* ------------menu principal---------------- */
            case 'registros':
                require_once "view/module/registros.php";
                break;
            case 'informes':
                require_once "view/module/informes.php";
                break;
            case 'mensaje':
                require_once "view/module/mensaje.php";
                break;
                /*----------------- menu de registro -----------------*/
            case 'usuario':
                require_once "view/module/creUsuario.php";
                break;
                case 'cliente':
                require_once "view/module/creacionDeCliente.php";
                break;
            case 'vehiculos':
                require_once "view/module/RegistroDeVehiculos.php";
                break;
               /*-------------------  menu de informes--------------------------- */
               case 'tableUsuario':
                require_once "view/module/tablaDeEmpleado.php";
                break;
                case 'tableCliente':
                require_once "view/module/tablaDeClientes.php";
                break;
            case 'tableVehiculos':
                require_once "view/module/RegistroDeVehiculos.php";
                break;
            /* -----------------------reporte -------------------------*/
            case 'reporte':
                require_once "view/module/reporte.php";
                break;
            default:
                require_once "view/module/menuPrincipal.php";
                break;

        }
    }else{
        require_once "view/module/menuPrincipal.php";
    }
?>