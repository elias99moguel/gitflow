<?php
include_once 'conexion.php';
$id = $_GET['id'];
$sentencia = $base_de_datos->prepare("SELECT id_empleado, nombre, correo, fecha_i FROM empresa WHERE id_empleado = ?;");
$sentencia->execute([$id]);
$empresa = $sentencia->fetchObject();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="validar.js"></script>
</head>

<body>
    <div class="container-fluid">

        <div class="row mt-3">

            <div class="col-md-12">
                <div class="card text-dark bg-info mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 style="color: white;">
                                    Modificar Empleados
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="modificar.php" method="post" onsubmit="return validarmodificar();">
                            <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Nombre del empleado:</label>
                                        <input name="id" type="hidden" value="<?php echo $empresa->id_empleado; ?>">
                                        <input class="form-control" id="nombre" name="nombre" type="text" aria-label="default input example" value="<?php echo $empresa -> nombre ?>">
                                        <label for="" class="form-label mt-4">fecha de nacimiento del empleado:</label>
                                        <input class="form-control" id="fecha" name="fecha" type="date" aria-label="default input example" value="<?php echo $empresa -> fecha_i?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Correo del empleado:</label>
                                        <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $empresa -> correo?>">
                                    </div>
                                <div class="col-md-6">
                                <button type="submit" value="Actualizar" class="btn btn-success mt-4"> <span>Guardar Cambios</span></button>
                                <a class="btn btn-danger mt-4" href="index.php" > <span>Cancelar</span></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>