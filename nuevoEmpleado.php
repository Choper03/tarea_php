<?php
include("includes/header.php");
?>

<div class="container p-4">
    <form action="guardarEmpleado.php" method="POST">
        <div class="card card-body">
            <div class="row">
            <div class="col-sm-6" >
                    <div class="form-group">
                        <input type="text" name="primerNombre" class="form-control" placeholder="Primer Nombre" autofocus> <br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="segundoNombre" class="form-control" placeholder="Segundo Nombre" autofocus> <br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tercerNombre" class="form-control" placeholder="Tercer Nombre" autofocus> <br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="primerApellido" class="form-control" placeholder="Primer Apellido" autofocus> <br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="segundoApellido" class="form-control" placeholder="Segundo Apellido" autofocus> <br>
                    </div>
                    <div class="form-group">
                        <input type="number" name="nit" class="form-control" placeholder="Nit" autofocus> <br>
                    </div>
            </div>
            <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="direccion" class="form-control" placeholder="Direccion" autofocus> <br>
                    </div>
                    <div class="form-group">
                        <input type="number" name="dpi" class="form-control" placeholder="DPI" autofocus> <br>
                    </div>
                    <div class="form-group">
                        <input type="number" name="sueldoMes" class="form-control" placeholder="Sueldo Mensual" autofocus> <br>
                    </div>
                    <div class="form-group">
                        <input type="number" name="sueldoDia" class="form-control" placeholder="Sueldo Diario" autofocus> <br>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" name="guardar" value="Guardar"> <br><br>
                    
            </div>
            </div>
            
        </div>
    </form>
    <button onclick="window.location.href = 'empleados.php';" class="btn btn-success btn-block">Regresar</button>
</div>


<?php
include("includes/footer.php");
?>
