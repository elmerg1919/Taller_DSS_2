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
    <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="border-botton: 1px solid: 1px solid #ce4da">
    <a class="navbar-brand" style="padding-right: 50px"><img src="img/logo.png" width="100px"> </a>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Registrar</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="listar.php">Listar<span class="sr-only">(current)</span> </a>
            </li>
        </ul>
    </div>
    </nav>
    
    <main role="main" class="container">
    
    <div class="starter-template">
        <h1>Listado PostgreSQL</h1>
        <p>Listado de personal</p>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Carnet</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
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
                    <td><a href="">actualizar</a></td>
                    <td><a href="eliminar.php?t=<?=$fila[0]?>">eliminar</a></td>
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
