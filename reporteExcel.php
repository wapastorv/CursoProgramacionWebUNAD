<?php
include 'funciones.php';

$error = false;
$config = include 'config.php';
header("Content-Type:application/csv");
header("Content-Disposition:attachment; filename=output.csv");
try {
  $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
  $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT nombre_producto, marca_producto, precio_producto, cantidad_producto FROM tabla47";


  $results = $conexion->query($sql, PDO::FETCH_NUM);
  $columns = [];
  for ($i = 0; $i < $results->columnCount(); $i++) {
    $columns[] = $results->getColumnMeta($i)['name'];
  }
  $outputFile = fopen('php://output', 'w+');

  fputcsv($outputFile, $columns);
  foreach ($results as $result) {
    fputcsv($outputFile, $result);
  }
  fclose($outputFile);
} catch (PDOException $error) {
  $error = $error->getMessage();
}

$conexion =null;
$result = null;
$sql=null;
?>