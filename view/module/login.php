<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/prueba.css">
    <link rel="stylesheet" href="view/css/sweetalert2.min.css">
    <script src="view/js/sweetalert2.all.min.js"></script>
    
</head>
<body>
    
    <div class="mobile-screen">
        <div class="header">
          <h1>Log in</h1>
        </div>
        
        <div class="logo">
            <img src="view/img/usuario (1).png" alt="">
        </div>
        
        
      
        <form action=""id="login-form" method="post">
          <input type="text" name="txtUser" id="usuario" placeholder="Usuario">
          <input type="password" name="txtPass" id="contraseña" placeholder="Password">
          <button type="submit" class="login-btn" id="boton" >log in </button>
    
        </form>
        
        
        
        <div class="other-options">
          <div class="option" id="newUser"><p class="option-text">New User</p></div>
          <div class="option" id="fPass"><p class="option-text"> Forgotten password</p></div>
        </div>
        
      </div>

      <?php
                if (isset($_POST["txtUser"])){
                    $user = $_POST["txtUser"];
                    $pass = $_POST["txtPass"];
                    $objCon = new ConexionController();
                    $objCon -> ctrLogin($user, $pass);
                }
            ?>
      <script src="js/contraseña.js"></script>
      <script src="view/js/login.js"></script>
    
</body>
</html>