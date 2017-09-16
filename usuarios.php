<!DOCTYPE html>
    
<html lang="es">
    
<head>
<title></title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css" />
</head>
    
<body>

<?php
    require 'control.php';
    $obj = new controlDB();
    
    //consulta, variable el objeto y la funcion de la clase
    $datos=$obj->consultar("select * from usuario");
   // print_r($datos);
    
?>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th>rol</th>
                    <th>nombre</th>
                    <th>num_doc</th>
                    <th>fecha</th>
                    <th>Operaciones</th>
                </tr>
                </thead>
                <?php foreach($datos as $tr){ ?>
                <tr>
                    <td><?php echo $tr['rol'];?></td>
                    <td><?php echo $tr['nombre'];?></td>
                    <td><?php echo $tr['num_doc'];?></td>
                    <td><?php echo $tr['fecha_nacimiento'];?></td>
                    <td>
                        <a href="modificar.php?id=<?php echo $tr["idUsuario"]?>" class="btn btn-info">Modificar</a>
                        
                        <a href="registrar.php?id=<?php echo $tr["idUsuario"]?>&funcion=eliminar" class="btn btn-danger">Eliminar</a> 
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<a href="insertar.php" class="btn btn-default">insertar</a>

</body>
</html>