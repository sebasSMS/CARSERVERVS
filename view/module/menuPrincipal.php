<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/estilos.css">
</head>

<body>
    <section class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <!-- search -->
            <!-- <div class="search">
                    <label>
                        <input type="text" placeholder="Seach Here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div> -->
            <!-- userImd -->
            <div class="user">
                <img src="view/img/sonic.jpg">
            </div>

        </div>
        <div class="search">
            <img src="view/img/fondo.jpg">

        </div>



    </section>

    <div class="navegacion">
        <ul>
            <li>
                <a href="#">
                    <span class="iconos">
                        <ion-icon name="logo-apple"></ion-icon>
                    </span>
                    <span class="title">brand name</span>
                </a>
            </li>
            <li>
                <a href="index.php?ruta=registros">
                    <span class="iconos">
                        <ion-icon name="clipboard-outline"></ion-icon>
                    </span>
                    <span class="title">Registros</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="iconos">
                        <ion-icon name="albums-outline"></ion-icon>
                    </span>
                    <span class="title">Informes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="iconos">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </span>
                    <span class="title">Message</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="iconos">
                        <ion-icon name="cog-outline"></ion-icon>
                    </span>
                    <span class="title">configuracion</span>
                </a>
            </li>

            <li>
                <a href="view/module/unload.php">
                    <span class="iconos">
                        <ion-icon name="exit-outline"></ion-icon>
                    </span>
                    <span class="title">Salida</span>
                </a>
            </li>

        </ul>

    </div>

    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2022 <a href="http://www.sena.edu.co">Sena</a>.</strong> Todos los derechos reservados

    </footer>
    

    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- menu -->
    <script src="view/js/menu.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- jQuery 3 -->
    <script src="view/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="view/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="view/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="view/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="view/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="view/dist/js/demo.js"></script>
    <script>
        $(document).ready(function() {
            $('.sidebar-menu').tree()
        })
    </script>





</body>

</html>