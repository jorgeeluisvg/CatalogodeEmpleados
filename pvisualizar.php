<?php include("db.php") ?>

<br>
<br>
<div class="container">
             <div class="row">
                <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Rfc</th>
                            <th>Curp</th>
                            <th>Fecha Nacimiento</th>
                            <th>Puesto</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        $query = "SELECT * FROM empleados";
                        $resultado_todo = mysqli_query($conn,$query);

                        while($fila = mysqli_fetch_array($resultado_todo)) { 
                        ?>
                            <tr>
                                <td>  <center> <?php echo $fila['primNombre'] ?> </center> </td>
                                <td>  <center> <?php echo $fila['apellidoP'] ?> </center> </td>
                                <td>  <center> <?php echo $fila['apellidoM'] ?> </center> </td>
                                <td>  <center> <?php echo $fila['rfc'] ?> </center> </td>
                                <td>  <center> <?php echo $fila['curp'] ?> </center> </td> 
                                <td>  <center> <?php echo $fila['fN'] ?> </center> </td>
                                 <td> <center> <?php echo $fila['puesto'] ?> </center> </td> 
                            </tr>
                            
                         <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
?>
