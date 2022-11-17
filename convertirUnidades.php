<?php include 'templates/header.php' ?>
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
<?php include 'templates/footer.php' ?>