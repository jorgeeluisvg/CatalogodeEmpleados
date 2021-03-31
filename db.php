<?php

    $db_host = "localhost";
    $db_usuario="root";
    $db_password="";
    $db_nombre="empleados";

    $conn = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);
    mysqli_set_charset($conn,'utf8mb4');
    $connstatus = "Ok";
    if(isset($conn)){
    

}
   
?>

