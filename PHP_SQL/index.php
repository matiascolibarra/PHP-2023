<?php

$host="localhost";
$user="root";
$contra="";
$nombre="centro";

$conexion = new mysqli($host,$user,$contra,$nombre);


if ($conexion->connect_error) {
    die("Error al conectar a la base de datos");
}


echo "<h2>Personas</h2>";
echo "<br><br>";

$sql="SELECT*FROM personas";
$resultado=$conexion->query($sql);

if($conexion->error) {
    die("Error al ejecutar consulta");
}

while ($fila=$resultado->fetch_assoc()) {
    echo $fila["id"]." | ".$fila["rol"]." | ".$fila["nombre"]." | ".$fila["apellido"]." | ".$fila["telefono"]." | ".$fila["direccion"]." | ".$fila["dni"]." | "."<br>---------------------------------------------------------------------------------------<br>";
}


echo "<h2>Usuarios</h2>";
echo "<br><br>";

$sql="SELECT*FROM usuario";
$resultado=$conexion->query($sql);

if($conexion->error) {
    die("Error al ejecutar consulta");
}

while ($fila=$resultado->fetch_assoc()) {
    echo $fila["id"]." | ".$fila["n_usuario"]." | ".$fila["email"]." | ".$fila["clave"]." | ".$fila["id_persona"]." | ".$fila["ft_perfil"]." | "."<br>-----------------------------------------------------------------<br>";
}


echo "<h2>Alumnos</h2>";
echo "<br><br>";

$sql="SELECT*FROM alumnos";
$resultado=$conexion->query($sql);

if($conexion->error) {
    die("Error al ejecutar consulta");
}

while ($fila=$resultado->fetch_assoc()) {
    echo $fila["id"]." | ".$fila["id_persona"]." | "."<br>-------<br>";
}

echo "<h2>Instructores</h2>";
echo "<br><br>";

$sql="SELECT*FROM instructores";
$resultado=$conexion->query($sql);

if($conexion->error) {
    die("Error al ejecutar consulta");
}

while ($fila=$resultado->fetch_assoc()) {
    echo $fila["id"]." | ".$fila["id_persona"]." | ".$fila["id_curso"]." | ".$fila["area"]." | "."<br>-----------------------------------<br>";
}


echo "<h2>Cursos</h2>";
echo "<br><br>";

$sql="SELECT*FROM cursos";
$resultado=$conexion->query($sql);

if($conexion->error) {
    die("Error al ejecutar consulta");
}

while ($fila=$resultado->fetch_assoc()) {
    echo $fila["id"]." | ".$fila["nombre"]." | ".$fila["duracion"]." | ".$fila["cupo"]." | ".$fila["imagen"]." | "."<br>-----------------------------------<br>";
}


echo "<h2>Inscripciones</h2>";
echo "<br><br>";

$sql="SELECT*FROM inscripcion";
$resultado=$conexion->query($sql);

if($conexion->error) {
    die("Error al ejecutar consulta");
}

while ($fila=$resultado->fetch_assoc()) {
    echo $fila["id"]." | ".$fila["id_curso"]." | ".$fila["id_alumno"]." | ".$fila["fecha"]." | "."<br>--------------------------<br>";
}

$conexion->close();
?>