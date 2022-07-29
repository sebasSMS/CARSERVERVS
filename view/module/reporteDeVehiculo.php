<?php
    header("content-Type: application/xls");
    header("content-Disposition: attachment; filename= reporte de vehiculo.xls");
    

?>
    <table class="table table-hover" id="vehiculo">
      <thead>
        <tr>
          <th>Placa</th>
          <th>Clase de Vehiculo</th>
          <th>Marca de Vehiculo</th>
          <th>Numero de cilindraje</th>
          <th>Lina de Vehiculo</th>
          <th>Modelo de Vehiculo</th>
          <th>Numero del Motor</th>
          <th>Funciones</th>

        </tr>
      </thead>
      <a name="" id="salir" class="btn btn-outline-success" href="index.php?ruta=reporteVehiculo" role="button"><img src="view/img/excel.png" width="60%" height="30%" alt=""></a>
      <tbody>
        <?php
        $objCtrCtrVehiculo = new ControllerVehiculo();
        $listaDeVehiculo = $objCtrCtrVehiculo->ctrListarVehiculo();
        foreach ($listaDeVehiculo as $dato) {
          echo "
          <tr>
            <td>" . $dato["PLACA"] . "</td>
            <td>" . $dato["MARCA"] . "</td>
            <td>" . $dato["CILINDRAJE"] . "</td>
            <td>" . $dato["LINEA"] . "</td>
            <td>" . $dato["CLASE"] . "</td>
            <td>" . $dato["MODELO"] . "</td>
            <td>" . $dato["NUMERO MOTOR"] . "</td>
            <td>
            <button type='button' class='btn btn-outline-primary' id='boton1' data-toggle='modal' data-target='#ModificarModal' onclick='modificar(this.parentElement.parentElement);' ><img src='view/img/editar.png' alt='' width='90%' height='50%'></button>
            <button type='button' class='btn btn-outline-danger' id='boton2' onclick='eliminar(this.parentElement.parentElement);' ><img src='view/img/eliminar.png' alt='' width='90%' height='50%'></button>
            <button type='button' class='btn btn-outline-success'id='boton3'><img src='view/img/inahabilitar.png' alt='' width='90%' height='50%'></button>
            </td>
            
          </tr>
          ";
        }
        ?>

      </tbody>
    </table>
