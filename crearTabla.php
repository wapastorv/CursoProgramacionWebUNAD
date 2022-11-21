<?php include 'templates/header.php';?>
<?php
$config = include 'config.php';

try {
  $conexion = new PDO('mysql:host=' . $config['db']['host'], $config['db']['user'], $config['db']['pass'], $config['db']['options']);
  $sql = file_get_contents("data/creaTabla.sql");
  

  $conexion->exec($sql);
  ?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Perfecto!</h4>
  <p>La tabla se creo sin problemas </p>
</div>
<?php
}catch (PDOException   $error){
  ?>
  <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Error!</h4>
  <p><?php echo $error->getMessage(); ?></p>
</div>

   
 <?php
 $conexion = null;

}

?>
<?php include "templates/footer.php";?>