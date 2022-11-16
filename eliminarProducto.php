<?php include 'templates/header.php'?>
<div class="container">
  <h1>Formulario de Eliminacion de un producto</h1>
<p class="lead">
                    Este Formulario nos servira para eliminar cualquier producto ya registrado
                </p>

    <form action="#" method="POST">
  <div class="form-group">
    <label for="email">Codigo:</label>
    <input type="email" class="form-control" placeholder="Ingrese el Codigo del producto" id="email" name="e" style="width:300px">
  </div>

<br>

  <button type="submit" class="btn btn-primary">Borrar producto</button>

</form>
<?php include 'templates/footer.php'?>