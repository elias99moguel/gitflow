<?php
include 'conexion.php';
$usuarios = "SELECT * FROM empresa";
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Hello, world!</title>
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
                                    Agregar nuevos empleados
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="agregar.php" method="POST" onsubmit="return validar();">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Nombre del empleado:</label>
                                    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="" aria-label="default input example" require>
                                    <label for="" class="form-label mt-4">fecha de nacimiento del empleado:</label>
                                    <input class="form-control" id="fecha" name="fecha" type="date" placeholder="" aria-label="default input example" require>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Correo del empleado:</label>
                                    <input type="email" name="correo" id="correo" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" require>
                                    <button type="submit"  class="btn btn-success mt-4"><i class="material-icons">&#xE147;</i> <span>Agregar empleado</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Fecha de nacimiento</th>
                                    <th scope="col">Modificar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $resultado = mysqli_query($conexion, $usuarios);
                                    while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                        <div>
                                            <td>#<?php echo $row['Id_Empleado']; ?></td>
                                        </div>
                                        <div>
                                            <td><?php echo $row['Nombre']; ?></td>
                                        </div>
                                        <div>
                                            <td><?php echo $row['Correo']; ?></td>
                                        </div>
                                        <div>
                                            <td><?php echo $row['fecha_I']; ?></td>
                                        </div>
                                        <div>
                                            <td><a class="btn btn-warning" href="updateform.php?id=<?php echo $row['Id_Empleado']; ?>"> Modificar</a></td>
                                            <td><a class="btn btn-danger" href="updateform.php"> Eliminar</a></td>
                                        </div>
                                </tr>
                            </tbody>
                        <?php }
                                    mysqli_free_result($resultado); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>