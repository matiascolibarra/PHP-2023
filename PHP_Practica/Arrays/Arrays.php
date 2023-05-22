<?php

$Personas= array(
    array(
        "nombre"=>"Pablo",
        "apellido"=>"Rico"
    ),
    array(
        "nombre"=>"Juan",
        "apellido"=>"Perez"
    ),
    array(
        "nombre"=>"Carlos",
        "apellido"=>"Fernandez"
    )
);

foreach ($Personas as $Alumnos){
echo $Alumnos["nombre"].$Alumnos["apellido"]."<br>";
}



echo "<br><br>";

$frutas= array("Manzana","Pera","Uva");
array_push($frutas, "Mango","Sandia");
print_r($frutas);



?>