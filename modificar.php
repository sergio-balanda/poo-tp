<!DOCTYPE html>
    
<html lang="es">
    
<head>
<title>Modificar</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css" />
</head>
    
<body>
<?php
    $cod=$_GET['id'];
    require_once "control.php";
    $obj = new controlDB();
    $user=$obj->consultar("select * from usuario where idUsuario=$cod");
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3>Modificar</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
           <form action="" method="post">
            <table class="table">
            
            <?php foreach($user as $users){ ?>
              
               <tr class="link">
                    <td>idUsuario</td>
                    <td><?php echo $cod; ?></td>
                </tr>
               
                <tr class="success">
                    <td>nombre</td>
                    <td><input type="text" name="nombre"
                    value="<?php echo $users['nombre']; ?>"></td>
                </tr>
              
                <tr class="info">
                    <td>password</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                
                <tr class="warning">
                    <td>num_doc</td>
                    <td><input type="text" name="num_doc" value="<?php echo $users['num_doc']; ?>"></td>
                </tr>
                
                <tr class="warning">
                    <td>tipo_doc</td>
                    <td><input type="text" name="tipo_doc"></td>
                </tr>
                
                <tr class="danger">
                    <td>nacimiento</td>
                </tr>
                
                <tr class="warning">
                    <td>
                    <div class="form-group">
                      <label for="sel1">Rol</label>
                      <select class="form-control" id="sel1" name="rol">
                        <option value="0">chofer</option>
                        <option value="1">admin</option>
                        <option value="2">supervisor</option>
                        <option value="3">mecanico</option>
                      </select>
                      </td>
                </div>
                </tr>
                
               <tr>
                   <td colspan="3" class="text-center">
                   <input type="submit" value="Modificar" class="btn btn-primary">
                   </td>
               </tr>
               
               <?php } ?>
               
            </table>
            </form>
    </div>
</div>

</body>
</html>