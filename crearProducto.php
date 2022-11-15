<?php include 'templates/header.php'?>
<?php include 'templates/nav.php'?>
<div class="container">
  <h1>Formulario de ingreso del producto</h1>
    <p class="lead">
        Este Formulario nos servira para ingresar y crear el producto a registrar
    </p>

    <form action="#" method="POST">
        <div class="form-group">
            <label for="email">Codigo:</label>
            <input type="email" class="form-control" placeholder="Ingrese el Codigo del producto" id="email" name="e" style="width:300px">
        </div>
        <div class="form-group">
            <label for="email">Nombre:</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre del producto" id="email" name="n" style="width:300px">
        </div>
        <div class="form-group">
            <label for="email">Marca:</label>
            <input type="number" class="form-control" placeholder="Ingrese la marca del producto" id="email" name="t" style="width:300px">
        </div>
        <div class="form-group">
            <label for="email">Precio:</label>
            <input type="text" class="form-control" placeholder="Ingrese el precio del producto" id="email" name="c" style="width:300px">
        </div>
        <div class="form-group">
            <label for="email">Cantidad:</label>
            <input type="text" class="form-control" placeholder="Ingrese aquí la cantidad comprada" id="dir" name="di" style="width:300px">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Registrar producto</button>
    </form>
</div>

        
<?php include 'templates/footer.php'?>