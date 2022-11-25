<?php
require 'conexion.php';
$conexion = conectar();

// Obtener el id del empleado a eliminar:
$empleadoId = $_POST['empleadoId'];

// Eliminar el empleado:
$consulta = "DELETE FROM empleado WHERE id = $empleadoId";
$resultado = mysqli_query($conexion, $consulta);

header('Content-type: application/json');

$output = array(
    'mensaje'  => 'Empleado eliminado correctamente',
    'codigo'   => 202
);

echo json_encode($output);
