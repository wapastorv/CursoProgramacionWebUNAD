
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

    if (isset($_POST['codigo'])) {
      $consultaSQL = "SELECT * FROM producto WHERE id_producto = " . $_POST['codigo'];
    }else{
      $consultaSQL = "SELECT * FROM producto WHERE id_producto = 0";
    }

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute();
    $producto = $sentencia->fetchAll();
  }catch(PDOException $error){
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
  <h1>Formulario de consulta de un producto</h1>
  <p class="lead">
    Este Formulario nos servira para consultar cualquier producto ya registrado
  </p>
  <form method="post">
    <div class="form-group">
      <label for="codigo">Codigo:</label>
      <input type="text" class="form-control" placeholder="Ingrese el Codigo del producto" id="codigo" name="codigo" class="form-control">
    </div>
    <br>
    <button type="submit" name="submit"class="btn btn-primary">Consultar producto</button>
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