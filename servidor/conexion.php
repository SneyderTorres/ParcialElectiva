<?php
// Función para conexión a base de datos MySQL:
function conectar() {
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base = "gestionempleados";
    $conexion = mysqli_connect($servidor, $usuario, $clave, $base);
    return $conexion;
}
