
<?php 

include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

if (isset($_POST['submit'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'El producto ' . escapar($_POST['nombre']) . ' ha sido agregado con éxito'
  ];

  $config = include 'config.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $producto = array(
        "id_producto"   => $_POST['codigo'],
        "nombre"    => $_POST['nombre'],
        "marca" => $_POST['marca'],
        "precio"    => $_POST['precio'],
        "cantidad"  => $_POST['cantidad'],
    );

    $consultaSQL = "INSERT INTO tabla47(id_producto, nombre_producto, marca_producto, precio_producto, cantidad_producto) values (:" . implode(", :", array_keys($producto)) . ")";

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute($producto);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
}
$conexion = null;
?>
<?php include 'templates/header.php'?>
<?php   
        if (isset($resultado)) {
    ?>
    <div class="container mt-3"> 
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
                <?= $resultado['mensaje'] ?>
            </div>
        </div>
    </div>
  <?php
        }
    ?>
    
<div class="container">
  <h1>Formulario de ingreso del producto</h1>
    <p class="lead">
        Este Formulario nos servira para ingresar y crear el producto a registrar
    </p>
    <form method="post">
        <div class="form-group">
          
          <?php
            $contador_id = 0;
            $consultaSQL2 = ('SELECT * FROM tabla47 WHERE id_producto = "1" ');
            $sentencia2 = $conexion->prepare($consultaSQL2);
            $sentencia2-> execute();
            $ids = $sentencia2->fetchAll(PDO::FETCH_ASSOC);
            foreach($ids as $id_producto){
              $contador_id = $contador_id + 1 ;
            }
          ?>
            <label for="codigo">Codigo:</label>
            <input type="text" class="form-control" value=" <?php $contador_id ?> " id="codigo" name="codigo" class="form-control">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre del producto" id="nombre" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" placeholder="Ingrese la marca del producto" id="marca" name="marca" class="form-control">
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" class="form-control" placeholder="Ingrese el precio del producto" id="precio" name="precio" class="form-control">
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="text" class="form-control" placeholder="Ingrese aquí la cantidad comprada" id="cantidad" name="cantidad" class="form-control">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Registrar producto</button>
        <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
    </form>
</div>
<?php
$conexion =null;
$sentencia = null;
$producto=null;
?>
        
<?php include 'templates/footer.php'?>