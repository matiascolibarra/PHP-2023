<?php


include("index.php");


function retornar_tipo_usuario(){
    global $conexion;
       $resultado=("SELECT FROM personas where id=1; ");
      $resultado = $conexion->query($resultado);
      while($fila = $resultado->fetch_assoc()){
            echo $fila["id"];
      }
}



?>