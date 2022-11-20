<?php
include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}
$error = false;
$config = include 'config.php';
 

  
  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
      
    $consultaSQL2 = "SELECT * FROM tabla47";
  
    $sentencia = $conexion->query($consultaSQL2, PDO::FETCH_NUM);
    $datos = [];



    if (isset($_POST['submit'])) {     
        for($i = 0; $sentencia->columnCount();$i++){
            $datos = $sentencia->getColumnMeta($i)['name'];
        }   
           
            header("Content-Type: application/csv");
            header("Content-Disposition: attachment; filename=reporte.csv");
            $mostrar_columnas = fopen('php://reportes','w+');
            fputcsv($mostrar_columnas, $datos);
            foreach($sentencia as $sentencia){
                fputcsv($mostrar_columnas,$sentencia);

            }        
    }
  } catch(PDOException $error) {
    $error = $error->getMessage();
  }
?>

<?php include 'templates/header.php' ?>

<?php
  if($error) {
?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>
<div class="container">
  <h1>Generar Reporte en Excel</h1>
  <p class="lead">
    Este Formulario nos servira para genera el reporte de los productos en excel 
  </p>
  <form method="post">
    <button type="submit" name="submit"class="btn btn-primary">Reporte Excel</button>
    <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
  </form>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>Codigo del producto</th>
              <th>Nombre</th>
              <th>Marca</th>
              <th>precio</th>
              <th>cantidad</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($producto && $sentencia->rowCount() > 0) {
              foreach ($producto as $fila) {
            ?>
                <tr>
                  <td><?php echo escapar($fila["id_producto"]); ?></td>
                  <td><?php echo escapar($fila["nombre_producto"]); ?></td>
                  <td><?php echo escapar($fila["marca_producto"]); ?></td>
                  <td><?php echo escapar($fila["precio_producto"]); ?></td>
                  <td><?php echo escapar($fila["cantidad_producto"]); ?></td>
                </tr>
            <?php
              }
            }
            ?>
          <tbody>
        </table>
      </div>
    </div>
  </div>
<?php include 'templates/footer.php'?>