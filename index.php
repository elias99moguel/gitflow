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
  </head>
  <body>
   
    <div class="container-fluid">

        <div class="row mt-3">

            <div class="col-md-12">
                <div class="card text-dark bg-info mb-3" >
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 style="color: white;">
                                    crud empleados
                                </h3>
                            </div>
                        
                        
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="agregar.php" method="POST">
                            <div class="row">
                            
                                <div class="col-md-6">
                                    <label for="" class="form-label">Nombre del empleado:</label>
                                    <input class="form-control" name="nombre" type="text" placeholder="" aria-label="default input example">
                                    <label for="" class="form-label mt-4">fecha de nacimiento del empleado:</label>
                                    <input class="form-control" name="fecha" type="date" placeholder="" aria-label="default input example">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Correo del empleado:</label>
                                    <input type="email" name="correo" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    <button type="submit" class="btn btn-success mt-4"><i class="material-icons">&#xE147;</i> <span>Agregar empleado</span></button>
                                    
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
                       
                    </div>
                </div>
             </div>
        </div>
  </body>
</html>
