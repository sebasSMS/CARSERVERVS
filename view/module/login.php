<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=}, initial-scale=1.0">
  <link rel="shortcut icon" href="view/img/logoProyecto.png" type="image/x-icon">
  <title>Document</title>
  <link rel="stylesheet" href="view/css/login.css">
  <link rel="stylesheet" href="view/css/sweetalert2.min.css">
  <script src="view/js/sweetalert2.all.min.js"></script>

</head>

<body>

  <div class="mobile-screen" id="login" mame="login">
    <div class="header">
      <h1>Log in</h1>
    </div>

    <div class="logo">
      <img src="view/img/usuario (1).png" alt="">
    </div>
    <!-- for mulario para registrar los usuarios -->
    <form id="registration-form">
      <input type="email" name="email" placeholder="E-mail">
      <input type="password" name="pass" placeholder="Password">
      <input type="password" name="repass" placeholder="Repeat password">
      <a href="#" class="login-btn" id="signup-btn">Sign Up</a>
    </form>

    <!-- formulario de login -->

    <form action="" id="login-form" method="POST">
      <input type="text" name="txtUser" id="usuario" required placeholder="Usuario">
      <input type="password" name="txtPass" id="contraseña" required placeholder="Password">
      <button type="submit" class="login-btn" id="boton">log in </button>

    </form>
    <!-- fromulario para recordar contraseña -->
    <form id="fpass-form" method="POST">
      <input type="text" name="txtCedula" id="cedula" placeholder="cedula">
      <input type="text" name="txtCorreo" id="txtCorreo" placeholder="E-mail">
      <button type="submit" class="login-btn" id="getpass-btn">confirmar</button>
    </form>

    <!-- capturamos los datos para recordar contraseña -->
    <?php
      if (isset($_POST["txtCedula"]) and $_POST["txtCedula"] != NULL) {
        $objUsuario = new ControllerUsuario();
        $objUsuario->crtValidarInformacion($_POST["txtCedula"], $_POST["txtCorreo"]);
      }
    ?>




    <div class="other-options">
      <div class="option" id="newUser">
        <p class="option-text">New User</p>
      </div>
      <div class="option" id="fPass">
        <p class="option-text"> Forgotten password</p>
      </div>
    </div>


  </div>

  <?php
  if (isset($_POST["txtUser"])) {
    $user = $_POST["txtUser"];
    $pass = $_POST["txtPass"];
    $objCon = new ConexionController();
    $objCon->ctrLogin($user, $pass);
  }
  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="view/js/login.js"></script>


</body>

</html>