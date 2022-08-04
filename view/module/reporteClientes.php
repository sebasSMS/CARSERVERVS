<?php
header("content-Type: application/xls");
header("content-Disposition: attachment; filename= reporte de clientes.xls");
date_default_timezone_set('America/Bogota');
$fecha = date('m-d-Y', time());
$hora = date('h:i:s a', time());

?>
<table class="table table-hover" id="example" border="2">
  <thead>
    <tr>
      <th bgcolor="DeepSkyBlue" colspan="3" rowspan="2">Reporte De Vehiculos </th>
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

    </tr>
  </thead>

  <tbody>
    <?php
    $objCtrCtrClientes = new ControllerCliente();
    $listaDeClientes = $objCtrCtrClientes->ctrListarCliente();
    foreach ($listaDeClientes as $dato) {
      echo "
                <tr>
                    <td>" . $dato["CEDULA"] . "</td>
                    <td>" . $dato["NOMBRE"] . "</td>
                    <td>" . $dato["APELLIDO"] . "</td>
                    <td>" . $dato["CORREO"] . "</td>
                    <td>" . $dato["CELULAR"] . "</td>
                    
                </tr>
              ";
    }
    ?>
  </tbody>
</table>