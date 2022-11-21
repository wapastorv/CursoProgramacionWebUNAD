<?php
include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

$config = include 'config.php';

$resultado = [
    'error' => false,
    'mensaje' => ''
  ];
  
  if (!isset($_GET['codigo'])) {
    $resultado['error'] = true;
    $resultado['mensaje'] = 'El producto no existe';
  }
  
  if (isset($_POST['submit'])) {
    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
  
      $producto2 = [
        "id"        => $_GET['codigo'],
        "nombre"    => $_POST['nombre_producto'],
        "marca"  => $_POST['marca_producto'],
        "precio"     => $_POST['precio_producto'],
        "cantidad"      => $_POST['cantidad_producto']
      ];
      
      $consultaSQL2 = "UPDATE tabla47 SET
          nombre_producto = :nombre,
          marca_producto = :marca,
          precio_producto = :precio,
          cantidad_producto = :cantidad,
          updated_at = NOW()
          WHERE id_producto = :id";
      $consulta = $conexion->prepare($consultaSQL2);
      $consulta->execute($producto2);
  
    } catch(PDOException $error) {
      $resultado['error'] = true;
      $resultado['mensaje'] = $error->getMessage();
    }
  }
  
  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
      
    $id = $_GET['codigo'];
    $consultaSQL2 = "SELECT * FROM tabla47 WHERE id_producto =" . $id;
  
    $sentencia2 = $conexion->prepare($consultaSQL2);
    $sentencia2->execute();
  
    $producto2 = $sentencia2->fetch(PDO::FETCH_ASSOC);
  
    if (!$producto2) {
      $resultado['error'] = true;
      $resultado['mensaje'] = 'No se ha encontrado el alumno';
    }
  
  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
    
  }
  $conexion = null;
?>

<?php include 'templates/header.php' ?>

<?php
    if ($resultado['error']) {
?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
<?php
    }   
?>

<?php
if (isset($_POST['submit']) && !$resultado['error']) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success" role="alert">
          El producto ha sido actualizado correctamente
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>

<?php
    if (isset($producto2) && $producto2) {
?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mt-4">Editando el producto <?= escapar($producto2['nombre_producto']) ?></h2>
        <hr>
        <form method="post">
          <div class="form-group">
            <label for="nombre_producto">Nombre</label>
            <input type="text" name="nombre_producto" id="nombre_producto" value="<?= escapar($producto2['nombre_producto']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="marca_producto">Marca</label>
            <input type="text" name="marca_producto" id="marca_producto" value="<?= escapar($producto2['marca_producto']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="precio_producto">Precio</label>
            <input type="text" name="precio_producto" id="precio_producto" value="<?= escapar($producto2['precio_producto']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="cantidad_producto">Cantidad</label>
            <input type="text" name="cantidad_producto" id="cantidad_producto" value="<?= escapar($producto2['cantidad_producto']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
            <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
            <a class="btn btn-primary" href="actualizarProducto.php">Regresar a Consultar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
}
?>
<?php
$conexion =null;
$sentencia = null;
$producto=null;
?>
<?php include 'templates/footer.php' ?>