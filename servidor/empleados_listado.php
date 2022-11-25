<?php
include("conexion.php");
$connection = conectar();

$consulta = '';
$datos = array();

$records_per_page = 10;
$start_from = 0;
$current_page_number = 0;

if(isset($_POST["rowCount"]))
{
    $records_per_page = $_POST["rowCount"];
}

if(isset($_POST["current"]))
{
    $current_page_number = $_POST["current"];
}
else
{
    $current_page_number = 1;
}

$start_from = ($current_page_number - 1) * $records_per_page;
$consulta .= "SELECT * FROM empleado ";

if(!empty($_POST["searchPhrase"]))
{
    $consulta .= 'WHERE (product.product_id LIKE "%'.$_POST["searchPhrase"].'%" ';
    $consulta .= 'OR category.category_name LIKE "%'.$_POST["searchPhrase"].'%" ';
    $consulta .= 'OR product.product_name LIKE "%'.$_POST["searchPhrase"].'%" ';
    $consulta .= 'OR product.product_price LIKE "%'.$_POST["searchPhrase"].'%" ) ';
}

$order_by = '';
if(isset($_POST["sort"]) && is_array($_POST["sort"]))
{
    foreach($_POST["sort"] as $key => $value)
    {
        $order_by .= " $key $value, ";
    }
}
else
{
    $consulta .= 'ORDER BY id DESC ';
}
if($order_by != '')
{
    $consulta .= ' ORDER BY ' . substr($order_by, 0, -2);
}

if($records_per_page != -1)
{
    $consulta .= " LIMIT " . $start_from . ", " . $records_per_page;
}

//echo $query;
$result = mysqli_query($connection, $consulta);
while($row = mysqli_fetch_assoc($result))
{
    $datos[] = $row;
}

$query1 = "SELECT * FROM empleado";
$result1 = mysqli_query($connection, $query1);
$total_records = mysqli_num_rows($result1);

$output = array(
    'current'  => intval($_POST["current"]),
    'rowCount'  => 10,
    'total'   => intval($total_records),
    'rows'   => $datos
);

header('Content-type: application/json');

echo json_encode($output);
