<?php

if(isset($_GET)){
    if($_GET['page']==1){
        include ('Location:../index.php');

      function retornar_tipo_id(){  
        global $conexion;
        $sql="SELECT*FROM personas";
        $resultado=$conexion->query($sql);  
        while ($fila=$resultado->fetch_assoc()) {
            echo $fila["id"];
        }  
    } 
    }

    if($_GET['page']==2){
        echo "Esta es la pagina 2";
    }

    if($_GET['page']==3){
        echo "Esta es la pagina 3";
    }

    if($_GET['page']==4){
        echo "Esta es la pagina 4";
    }

    if($_GET['page']==5){
        echo "Esta es la pagina 5";
    }

    if($_GET['page']==6){
        echo "Esta es la pagina 6";
    }

}






?>