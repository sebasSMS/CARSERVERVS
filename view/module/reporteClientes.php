<?php
    header("content-Type: application/xls");
    header("content-Disposition: attachment; filename= reporte de clientes.xls");

?>
<table class="table table-hover" id="example" border="2" bgcolor="red">
        <thead >
          <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Rol</th>

          </tr>
        </thead>
        
        <tbody>
            <?php
            $objCtrCtrClientes = new ControllerCliente();
            $listaDeClientes = $objCtrCtrClientes -> ctrListarCliente();
            foreach($listaDeClientes as $dato){
            echo"
                <tr>
                    <td>".$dato["CEDULA"]."</td>
                    <td>".$dato["NOMBRE"]."</td>
                    <td>".$dato["APELLIDO"]."</td>
                    <td>".$dato["CORREO"]."</td>
                    <td>".$dato["CELULAR"]."</td>
                    <td>".$dato["PLACA"]."</td>
                    
                </tr>
                ";
            
            } 
            ?>
        </tbody>
      </table>