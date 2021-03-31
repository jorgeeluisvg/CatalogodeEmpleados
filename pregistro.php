<?php include("db.php") ?>
<?php
       
            $primNombre     = $_POST['primNombre'];
            $apellidoP      = $_POST['apellidoP'];
            $apellidoM      = $_POST['apellidoM'];
            $rfc            = $_POST['rfc'];
            $curp           = $_POST['curp'];
            $fN             = $_POST['fN'];
            $puesto         = $_POST['puesto'];    
            
            if($primNombre ==NULL || $apellidoP ==NULL || $apellidoM == NULL || $rfc ==NULL || $curp ==NULL || $fN ==NULL ||
            $puesto ==Null ){
                
                die("lo siento prry");
            }
            else {
                $query = "INSERT INTO empleados (primNombre, apellidoP, apellidoM, rfc, curp, fN, puesto ) 
                VALUES ('$primNombre', '$apellidoP', '$apellidoM', '$rfc', '$curp', '$fN', '$puesto')";
                $resultado=mysqli_query($conn, $query);
                
                if (!$resultado)
                {
                    die("lo siento prry");
                }
                else{
                
                }
            } 

        ?>



