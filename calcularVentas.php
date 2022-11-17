<?php include('templates/header.php')?>
        <main class="flex-shrink-0">
            <div class="container">
                <h3 class="mt-5">
                     Calcular Ventas
                </h3>
                <p class="lead">
                    Esta herramienta calula el valor de la venta y nos brinda informacion de las utilidades que se tiene
                </p>
                <form  class="row g-3 mt-3" name="formVentas" action="calcularVentas.php" role="form" method="POST">
                    <div class="col-4">
                        <label for="valorCompra" class="form-label">Valor de la compra</label>
                        <input type="text" class="form-control" id="valorCompra" name="valor_compra">
                    </div>
                    <div class="col-4">
                        <label for="porcentajeUtilidad" class="form-label">Porcentaje de Utilidad</label>
                        <input type="text" class="form-control" id="porcentajeUtilidad" name="porcentaje_utilidad">
                    </div>
                    <div class="col-4">
                        <label for="porcentajeImpuestos" class="form-label">Porcentaje de Impuestos</label>
                        <input type="text" class="form-control" id="porcentajeImpuestos" name="porcentaje_impuestos">
                    </div>
                    <div class="d-grid grap-2 d-md-block">
                        <button class="btn btn-primary" type="button" onclick="calcularVenta()" > Calcular</button>
                        <button class="btn btn-light" type="reset" value="Limpiar"> Borrar</button>
                    </div>
                    <div class="col-6">
                        <label for="resultadoValorVenta">Valor de la venta</label>
                        <input type="text" class="form-control" id="resultadoValorVenta" name="resultado_valor_venta" disabled>
                    </div>
                    <div class="col-6">
                        <label for="resultadoGanancias">Ganancias</label>
                        <input type="text" class="form-control" id="resultadoGanancias" name="resultado_ganancias" disabled>
                    </div>
                </form>
            </div>
        </main>
<?php include('templates/footer.php')?>