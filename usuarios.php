<!DOCTYPE html>
    
<html lang="es">
    
<head>
<title>Todos los usuarios</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css" />
</head>
    
<body>

<?php
    require 'control.php';
    $obj = new controlDB();
    /*-------------Paginacion-------------------*/
    $tamagno_paginas=3;//cunatos registros x pag
    if(isset($_GET['pagina'])){
    if($_GET['pagina']==1){
            header("Location:usuarios.php");
        }else{
            $pag=$_GET['pagina'];
        }
    }else{
        $pag=1;//pagina actual
    }    
    
    
    $empezar_desde=($pag-1)*$tamagno_paginas;
    
    //consulta, variable el objeto y la funcion de la clase
    $datos=$obj->consultar("select * from usuario  LIMIT $empezar_desde,$tamagno_paginas");
    //print_r($datos);
    
    /*-------------Paginacion-------------------*/
    $num_filas=count($obj->consultar("select * from usuario"));
    $total_paginas=ceil($num_filas/$tamagno_paginas);//ceil redondea paginas
    $sql_limite=$obj->consultar("select * from usuario"); 
  
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
    <div class="row">
        <div class="col">
            <?php
            for($i=1; $i <= $total_paginas; $i++){
            echo "<ul class='pagination'>
                   <li><a href='?pagina=" . $i . "'>" . $i . "</a></li>
                  </ul>";}
            ?>    
        </div>
    </div>
</div>
<a href="insertar.php" class="btn btn-default">insertar</a>
<a href="exportar.php" target="_blank" >exportar</a>
</body>
</html>