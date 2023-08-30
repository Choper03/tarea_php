<?php
include("db.php");
    if(isset($_POST['guardar'])){
        
        $nombre1 = $_POST['primerNombre'];
        $nombre2 = $_POST['segundoNombre'];
        $nombre3 = $_POST['tercerNombre'];
        $apellido1 = $_POST['primerApellido'];
        $apellido2 = $_POST['segundoApellido'];
        $nit = $_POST['nit'];
        $direccion = $_POST['direccion'];
        $dpi = $_POST['dpi'];
        $sueldoMes = $_POST['sueldoMes'];
        $sueldoDia = $_POST['sueldoDia'];

        $query = "INSERT INTO empleados(primerNombre, segundoNombre, tercerNombre, primerApellido, segundoApellido, nit, direccion, dpi, salarioMensual, salarioDiario, estado) VALUES('$nombre1', '$nombre2', '$nombre3','$apellido1', '$apellido2', '$nit', '$direccion', '$dpi', '$sueldoMes', '$sueldoDia','Activo')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Error al guardar");
        }else {

            $_SESSION['message'] = "Se Guardó Exitosamente";
            $_SESSION['message_type'] = "success";

            
        }
        header("Location: empleados.php");
    }

?>