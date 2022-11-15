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
                                        <a class="dropdown-item" href="conversion_unidades.html">Conversion de Unidades</a>
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
                <h3 class="mt-5">
                     Convertidor de tamaño de datos
                </h3>
                <p class="lead">
                    Esta herramienta convirte una unidad de almacenamiento de datos digitales
                    a otra unidad de almacenamiento de datos digitales
                </p>
                <form class="container col-md-8" name="formularioConversionUnidades" action="convertir_unidades.html" metodo="POST">
                    <div class="input-group mb-3">
                            <span class="input-group-text">Cantidad</span>
                            <input type="text" class="form-control" name="inputCantidad" id="inputCantidad" placeholder="Valor a convertir.." aria-label="Valor a convertir">
                        <label class="input-group-text "  for="inputGroupSelect01">De</label>
                        <select class="form-select" name="inputGroupSelect01" id="inputGroupSelect01">
                            <option selected>Elejir..</option>
                            <option value="Byte">Byte(B)</option>
                            <option value="Kilobyte">Kilobyte(kB)</option>
                            <option value="Megabyte">Megabyte(MB)</option>
                            <option value="Gigabyte">Gigabyte(GB)</option>
                            <option value="Terabyte">Terabyte(TB)</option>
                        </select>
                        <label class="input-group-text " for="inputGroupSelect02">a</label>
                        <select class="form-select" name="inputGroupSelect02" id="inputGroupSelect02">
                            <option selected>Elejir..</option>
                            <option value="Byte">Byte(B)</option>
                            <option value="Kilobyte">Kilobyte(kB)</option>
                            <option value="Megabyte">Megabyte(MB)</option>
                            <option value="Gigabyte">Gigabyte(GB)</option>
                            <option value="Terabyte">Terabyte(TB)</option>
                        </select>
                        <button type="button" class="btn btn-primary" onclick="convertirUnidades()" value="convertir">Convertir</button>
                        <button class="btn btn-light" type="reset" value="Limpiar">Borrar</button>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Resultado</label>
                            <input type="text" class="form-control" name="inputResuldado" disabled>

                        </div>
                </form>
            </div>
        </main>
        
        <footer class="footer mt-auto py-3 bg-light">
            <div class="container-fluid">
                <span class="text-muted">&copy; Todos los derechos reservados - UNAD - Codigo:301127_47</span>
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
  </body>
</html>