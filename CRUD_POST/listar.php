<?php
include 'conexion.php';

$con=conexion();
?>
<!Doctype html>
<html lang="es">
  <head>
    <title>Listar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
   <body>
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"><img src="index.jpg" style="width: 35px; position: absolute;"> <span style="position: relative; left: 35px;">Index</span></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="index.php">Registrar</a>
        <a class="p-2 text-dark" href="listar.php">Lista</a>
        <a class="p-2 text-dark" href="#">Actualizar</a>
      </nav>
    </div>

    <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Listado PostgreSQL</h1>
      <p class="lead">PostgreSQL + PHP</p>
    </div>
    
    <main role="main" class="container">
    
    <div class="starter-template">
        <h1>Listado de personal</h1>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Carnet</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Departamento</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="select * from Estudiante";
                    $obj= pg_query($con,$sql);
                    
                    while($fila= pg_fetch_array($obj)){
                       
                        ?>
                    <tr>
                    
                    <td scope="col"><?=$fila[1]?></td>
                    <td scope="col"><?=$fila[2]?></td>
                    <td scope="col"><?=$fila[3]?></td>
                    <td scope="col"><?=$fila[4]?></td>
                    <td scope="col"><?=$fila[5]?></td>
                    <td><a href="actualizar.php?t=<?=$fila[0]?>">Actualizar</a></td>
                    <td><a href="eliminar.php?t=<?=$fila[0]?>">Eliminar</a></td>
                    </tr>
                        <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>
    </main>
  </body>
</html>
