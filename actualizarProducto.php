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
      $consultaSQL = "SELECT * FROM tabla47 WHERE id_producto = " . $_POST['codigo'];
    }else{
<<<<<<< HEAD
      $consultaSQL = "SELECT * FROM tabla47";
=======
      $consultaSQL = "SELECT * FROM tabla47 WHERE id_producto = 0";
>>>>>>> invetarios
    }
    

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute();
    $producto = $sentencia->fetchAll();
  }catch(PDOException $error){
    $error = $error->getMessage();
  }
  
?>
<?php include 'templates/header.php' ?>

  <div class="container">
  <h1>Formulario de actualizacion de un producto</h1>
  <p class="lead">
    Este Formulario nos servira para actualizar cualquier producto ya registrado
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
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Codigo del producto</th>
              <th>Nombre</th>
              <th>Marca</th>
              <th>precio</th>
              <th>cantidad</th>
              <th>Acciones</th>
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
                  <td>
                  <a href="<?= 'modalActualizarProducto.php?codigo=' . escapar($fila["id_producto"]) ?>">✏️Editar</a>
                  </td>
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
<?php
$conexion =null;
$sentencia = null;
$producto=null;
?>
<?php include 'templates/footer.php'?>