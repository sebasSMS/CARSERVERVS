<?php
header("content-Type: application/xls");
header("content-Disposition: attachment; filename= reporte de usuario.xls");
date_default_timezone_set('America/Bogota');
$fecha = date('m-d-Y', time());
$hora = date('h:i:s a', time());
?>
<table class="table table-hover" id="example" border="2">
  <thead>
    <tr>
      <th bgcolor="DeepSkyBlue" colspan="4" rowspan="2">Reporte de Usuarios</th>
      <th bgcolor='PaleTurquoise'>FECHA</th>
      <th bgcolor='PaleTurquoise'>HORA</th>
    </tr>
    <tr>
      <th><?php echo $fecha; ?></th>
      <th><?php echo $hora; ?></th>
    </tr>
    <tr>
      <th bgcolor="DeepSkyBlue"> Cedula</th>
      <th bgcolor="DeepSkyBlue"> Nombre</th>
      <th bgcolor="DeepSkyBlue"> Apellido</th>
      <th bgcolor="DeepSkyBlue"> Email</th>
      <th bgcolor="DeepSkyBlue"> Celular</th>
      <th bgcolor="DeepSkyBlue"> Rol</th>


    </tr>
  </thead>

  <tbody>
    <?php
    $objCtrCtrUsuario = new ControllerUsuario();
    $listaDeUsuario = $objCtrCtrUsuario->ctrListarUsuario();
    foreach ($listaDeUsuario as $dato) {
      echo "
          <tr>
            <td bgcolor='PaleTurquoise'  >" . $dato["CEDULA"] . "</td>
            <td bgcolor='Aqua' >" . $dato["NOMBRE"] . "</td>
            <td bgcolor='PaleTurquoise'  >" . $dato["APELLIDO"] . "</td>
            <td bgcolor='Aqua' >" . $dato["CORREO"] . "</td>
            <td bgcolor='PaleTurquoise'  >" . $dato["CELULAR"] . "</td>
            <td bgcolor='Aqua'>" . $dato["ROL"] . "</td>
            
            
          </tr>
          ";
    }
    ?>
  </tbody>
</table>