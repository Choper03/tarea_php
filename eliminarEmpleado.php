<?php
include("db.php");

    if(isset($_GET['id'])){
        $codigo = $_GET['id'];
        $query = "DELETE FROM empleados WHERE cod_empleado = $codigo";

        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Error");
        } 
        
        header("Location: empleados.php");
    }

?>