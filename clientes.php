<?php
include("db.php");
include("includes/header.php");
?>

<div class="container p-1">
    <center>    
    <button onclick="window.location.href = 'nuevoEmpleado.php';" class="btn btn-danger btn-block">Nuevo Empleado</button><br><br>
        <div class="col-md-12">

                <table class="table table-dark table-hover table-bordered border-primary table-sm">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Nit</th>
                            <th>Direccion</th>
                            <th>DPI</th>
                            <th>Sueldo Mensual</th>
                            <th>Sueldo Diario</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            $query = "SELECT cod_empleado, concat(primerNombre, ' ', segundoNombre, ' ', tercerNombre) as nombres, concat(primerApellido, ' ', segundoApellido) as apellidos, nit, direccion, dpi, salarioMensual, salarioDiario, estado FROM empleados";
                            $result = mysqli_query($conn, $query);

                            while($rows = mysqli_fetch_array($result)){ ?>
                                <tr>
                                    <td><?php echo $rows['cod_empleado']?></td>
                                    <td><?php echo $rows['nombres']?></td>
                                    <td><?php echo $rows['apellidos']?></td>
                                    <td><?php echo $rows['nit']?></td>
                                    <td><?php echo $rows['direccion']?></td>
                                    <td><?php echo $rows['dpi']?></td>
                                    <td><?php echo $rows['salarioMensual']?></td>
                                    <td><?php echo $rows['salarioDiario']?></td>
                                    <td><?php echo $rows['estado']?></td>
                                    <td>
                                        <a href="editarUsuario.php?id=<?php echo $rows['cod_empleado']?>" class="btn btn-dark btn-block">Editar</a><br>
                                        <a href="eliminarEmpleado.php?id=<?php echo $rows['cod_empleado']?>" class="btn btn-dark btn-block">Eliminar </a>
                                    </td>
                                </tr>
                    <?php } ?>
                        
                    </tbody>
                </table>

        </div>
        
        </center>
    </div>

<?php
include("includes/footer.php");
?>
