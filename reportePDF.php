<?php
include 'funciones.php';
require "fpdf/fpdf.php";


$error = false;
$config = include 'config.php';
header("Content-Type:application/pdf");
header("Content-Disposition:attachment; filename=output.pdf");
try{
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion2 = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
    $conexion2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $results = $conexion2->query('SELECT nombre_producto, marca_producto, precio_producto, cantidad_producto FROM tabla47');
    $results->setFetchMode(PDO::FETCH_ASSOC);
    /*while($row = $results->fetch()){
        echo $row['nombre_producto'] . "\n";
        echo $row['marca_producto'] . "\n";
        echo $row['precio_producto'] . "\n";
        echo $row['cantidad_producto'] . "\n";
    }*/
    $pdf = new FPDF("P", "mm", "letter");
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B",12);
    $pdf->Cell(190, 5, "reporte productos", 0, 1, "C");

    $pdf->Ln(2);

    $pdf->setFont("Arial", "B", 9);

    $pdf->Cell(50, 5, "Nombre", 1, 0,"C");
    $pdf->Cell(50, 5, "Marca", 1, 0,"C");
    $pdf->Cell(50, 5, "Precio", 1, 0,"C");
    $pdf->Cell(50, 5, "Cantidad", 1, 1,"C");

    $pdf->SetFont("Arial", "",9);

    while($row = $results->fetch()){
        $pdf->Cell(50, 5, $row['nombre_producto'], 1, 0, "C");
        $pdf->Cell(50, 5, $row['marca_producto'], 1, 0, "C");
        $pdf->Cell(50, 5, $row['precio_producto'], 1, 0, "C");
        $pdf->Cell(50, 5, $row['cantidad_producto'], 1, 1, "C");
    }
    $pdf->Output("reporte.pdf","D");

} catch(PDOException $error){
    $error = $error->getMessage();  
}

