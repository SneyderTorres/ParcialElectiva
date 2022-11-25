<?php
include("conexion.php");
$conexion = conectar();

$empleadoId = $_POST['empleadoId'];

// Buscar empleado por ID:
$consulta = "SELECT * FROM empleado WHERE id = $empleadoId";
$resultado = mysqli_query($conexion, $consulta);

// Obtener el empleado:
$empleado = mysqli_fetch_assoc($resultado);

header('Content-type: application/json');
echo json_encode($empleado);
