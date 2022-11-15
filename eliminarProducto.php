<!doctype html>
<html lang="en">
  <link>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElectronicApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet"link>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">Electronic App</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Administrador
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">Crear Base Datos</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Crear Tabla</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Generar Reporte PDF</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Generar Backup</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Invetarios
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="crearProducto.html">Crear</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="consultarProducto.html">Consultar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="actualizarProducto.html">Actualizar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="eliminarProducto.html">Eliminar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Utilidades
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="calcularVentas.html">Calcular Ventas</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="convertir_unidades.html">Conversion de Unidades</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="flex-shrink-0">
            <div class="container">
                <title>Formulario de Eliminar un  producto</title>
  </head>
  <body>
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
</div>
        </main>
        
        <footer class="footer mt-auto py-3 bg-light">
            <div class="container-fluid">
                <span class="text-muted">&copy; Todos los derechos reservados - UNAD - Codigo:301127_47</span>
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>