<?php
include("conexion.php");
$conexion = conectar();


$nombres = mysqli_real_escape_string($conexion, $_POST['nombres']);
$apellidos =mysqli_real_escape_string($conexion,  $_POST['apellidos']);
$fechaNacimiento = mysqli_real_escape_string($conexion, $_POST['fechaNacimiento']);
$direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
$hijos = mysqli_real_escape_string($conexion, $_POST['hijos']);
$casado = mysqli_real_escape_string($conexion, $_POST['casado']);
$salario = mysqli_real_escape_string($conexion, $_POST['salario']);

if (isset($_POST['Operacion']) && $_POST('Operacion') == 'Editar') {
    $empleadoid = mysqli_real_escape_string($conexion, $_POST['empleadoId']);

    $consulta = "UPDATE empleado SET nombres = '$nombres', apellidos = '$apellidos', fecha_nacimiento = '$fechaNacimiento', direccion = '$direccion', hijos = $hijos, casado = $casado, salario = $salario WHERE id = $empleadoid";

    $resultado = mysqli_query($conexion, $consulta);

    header('Content-type: application/json');

    $output = array(
        'mensaje'  => 'Empleado actualizado correctamente',
        'codigo'   => 202
    );

    echo json_encode($output);
} else {

    $consulta = "INSERT INTO empleado (nombres, apellidos, fecha_nacimiento, direccion, hijos, casado, salario) VALUES ('$nombres', '$apellidos', '$fechaNacimiento', '$direccion', $hijos, $casado, $salario)";

    $resultado = mysqli_query($conexion, $consulta);

    header('Content-type: application/json');

    $output = array(
        'mensaje' => 'Empleado creado correctamente',
        'codigo' => 202
    );

    echo json_encode($output);
}
