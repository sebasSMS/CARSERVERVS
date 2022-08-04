<?php
  header("content-Type: application/xls");
  header("content-Disposition: attachment; filename= reporte de vehiculo.xls");
  date_default_timezone_set('America/Bogota');
  $fecha = date('m-d-Y', time());
  $hora = date('h:i:s a', time());
?>
<table class="table table-hover" id="vehiculo" border="2">
    <thead>
      <tr>
        <th bgcolor="DeepSkyBlue" colspan="5" rowspan="2">Reporte De Vehiculos </th>
        <th bgcolor='PaleTurquoise'>FECHA</th>
        <th bgcolor='PaleTurquoise'>HORA</th>
      </tr>
      <tr>
        <th><?php echo $fecha; ?></th>
        <th><?php echo $hora; ?></th>
      </tr>
      <tr>
        <th bgcolor="DeepSkyBlue">Placa</th>
        <th bgcolor="DeepSkyBlue">Clase de Vehiculo</th>
        <th bgcolor="DeepSkyBlue">Marca de Vehiculo</th>
        <th bgcolor="DeepSkyBlue">Numero de cilindraje</th>
        <th bgcolor="DeepSkyBlue">Lina de Vehiculo</th>
        <th bgcolor="DeepSkyBlue">Modelo de Vehiculo</th>
        <th bgcolor="DeepSkyBlue">Numero del Motor</th>
      </tr>
    </thead>
  <tbody>
    <?php
    $objCtrCtrVehiculo = new ControllerVehiculo();
    $listaDeVehiculo = $objCtrCtrVehiculo->ctrListarVehiculo();
    foreach ($listaDeVehiculo as $dato) {
      echo "
        <tr>
          <td bgcolor='PaleTurquoise' >" . $dato["PLACA"] . "</td>
          <td bgcolor='Aqua' >" . $dato["MARCA"] . "</td>
          <td bgcolor='PaleTurquoise' >" . $dato["CILINDRAJE"] . "</td>
          <td bgcolor='Aqua' >" . $dato["LINEA"] . "</td>
          <td bgcolor='PaleTurquoise' >" . $dato["CLASE"] . "</td>
          <td bgcolor='Aqua' >" . $dato["MODELO"] . "</td>
          <td bgcolor='PaleTurquoise' >" . $dato["NUMERO MOTOR"] . "</td>
          
        </tr>
        ";
    }
    ?>

  </tbody>
</table>