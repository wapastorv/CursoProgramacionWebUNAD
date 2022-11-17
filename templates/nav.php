<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Electronic App</a>
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
                                        <a class="dropdown-item" href="./crearBaseDeDatos.php">Crear Base Datos</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./crearTabla.php">Crear Tabla</a>
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
                                    Inventarios
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="./crearProducto.php">Crear</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./consultarProducto.php">Consultar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./actualizarProducto.php">Actualizar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./eliminarProducto.php">Eliminar</a>
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
                                        <a class="dropdown-item" href="./calcularVentas.php">Calcular Ventas</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./convertir_unidades.php">Conversion de Unidades</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
