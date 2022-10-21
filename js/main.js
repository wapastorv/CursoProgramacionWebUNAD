function convertirUnidades(){
    
    var a = document.f1.a.value;
    var b = document.f1.b1.value;
    var x = document.f1.b2.value;
    var r = document.f1.c.value;
    r=(parseFloat(a)*parseFloat(x))/parseFloat(b);
   document.f1.c.value=r;
    
}
function calcularVenta() 
{
    var valorCompra =   document.formVentas.valor_compra.value;
    var porcentajeUtilidad  =   document.formVentas.porcentaje_utilidad.value;
    var porcentajeImpuestos =   document.formVentas.porcentaje_impuestos.value;
    var resultadoValorVenta =   document.formVentas.resultado_valor_venta.value;
    var resultadoGanancias  =   document.formVentas.resultado_ganancias.value;
    var porcentaje_impuestos    =   (parseFloat(valorCompra)*parseFloat(porcentajeImpuestos))/100;
    var porcentaje_utilidad =   (parseFloat(valorCompra)*parseFloat(porcentajeUtilidad))/100;
    var r1 = parseFloat(valorCompra)+parseFloat(porcentaje_impuestos)+parseFloat(porcentaje_utilidad);
    var r2 = parseFloat(porcentaje_utilidad);
    document.formVentas.resultado_valor_venta.value =   r1;
    document.formVentas.resultado_ganancias.value   =   r2;        
}
