<!DOCTYPE html>
    
<html lang="es">
    
<head>
<title>Insertar</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css" />
</head>
    
<body>

<div class="container">
    <div class="row">
        <div class="col">
           <form action="registrar.php" method="post">
            <table class="table">
             
                <tr class="success">
                    <td>nombre</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
              
                <tr class="info">
                    <td>password</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                
                <tr class="warning">
                    <td>num_doc</td>
                    <td><input type="text" name="num_doc"></td>
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
                   <input type="submit" value="insertar" class="btn btn-primary">
                   </td>
               </tr>
            </table>
            </form>
        </div>
    </div>
</div>


</body>
</html>