<?php
    require 'control.php';
    
    $nomb=$_POST['nombre'];
    $pass=$_POST['pass'];
    $doc=$_POST['num_doc'];
    $tipo=$_POST['tipo_doc'];
    $rol=$_POST['rol'];
    //FALTA LA FECHA VER FORMATO PARA GUARDARLA
    $clave_md5=md5($pass);

   $sql="insert into usuario(nombre,password,num_doc,tipo_doc,rol) 
   values('$nomb','$clave_md5','$doc','$tipo','$rol')"; 
   
   $obj= new controlDB();
   $obj->insertar($sql);
  
?>