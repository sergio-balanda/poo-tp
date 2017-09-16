<?php
    class controlDB{
        /*-------------------CONEXION----------------------------*/
        //constructor
        function __construct(){
            
            try{
             //aca va la conexion,declaro variables
            $host="localhost";
            $db_name="logistica";
            $user="root";
            $pass="";  
            
            //conexion dentro de variable
            $this->con=mysqli_connect($host,$user,$pass) or die("Error en la conexion");
            //selecciona la base
            mysqli_select_db($this->con,$db_name) or die("no se encontro bbdd");
                
            //echo "conexion ok";
            }catch(Exception $ex){
                throw $ex;
            }    
        }
        
        /*----------------------CONSULTAR-------------------------*/
         //$sql va ser el select
        function consultar($sql){
        //conexion,consulta
        $res=mysqli_query($this->con,$sql);
        
        //array vacio
        $data=null;
        //capturar la info,fecth captura datos fila por fila y almacena con el indice de la tabla el nombre, fethc row no trae el nombre del campo
        while($fila=mysqli_fetch_assoc($res)){
            $data[]=$fila;
        }
        return $data;
        }
        
        /*---------------------INSERTAR-----------------------------*/
        function insertar($sql){
            mysqli_query($this->con,$sql);
            //validar cuando se inserta,columnas afectadas
            //if si no hay cambios en la tabla
            if(mysqli_affected_rows($this->con)<=0){
                echo "No se pudo realizar la operacion";
            }else{
                echo "Se realizaron los cambios";
            }
        }
        
    }//fin clase
    
   
?>