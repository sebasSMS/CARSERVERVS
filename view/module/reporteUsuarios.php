<?php
    header("content-Type: application/xls");
    header("content-Disposition: attachment; filename= reporte de usuario.xls");

?>
<table class="table table-hover" id="example" border="2" bgcolor="red">
<thead>
          <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Rol</th>
            <th>funciones</th>

          </tr>
        </thead>

        <tbody>
        <?php
          $objCtrCtrUsuario = new ControllerUsuario();
          $listaDeUsuario = $objCtrCtrUsuario -> ctrListarUsuario();
        foreach($listaDeUsuario as $dato){
          echo"
          <tr>
            <td>".$dato["CEDULA"]."</td>
            <td>".$dato["NOMBRE"]."</td>
            <td>".$dato["APELLIDO"]."</td>
            <td>".$dato["CORREO"]."</td>
            <td>".$dato["CELULAR"]."</td>
            <td>".$dato["ROL"]."</td>
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