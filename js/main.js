function convertirUnidades(){
    
    var a = document.formularioConversionUnidades.inputCantidad.value;
    var b = document.formularioConversionUnidades.inputGroupSelect01.value;
    var x = document.formularioConversionUnidades.inputGroupSelect02.value;
    var r = document.formularioConversionUnidades.inputResuldado.value;

    if (b == "Byte" && x == "Kilobyte" || b == "Kilobyte" && x == "Megabyte" || b == "Megabyte" && x == "Gigabyte" || b == "Gigabyte" && x =="Terabyte"){
        r = (parseFloat(a) / 1e+3);
        document.formularioConversionUnidades.inputResuldado.value=r;
    }
    if(b == "Kilobyte" && x == "Byte" || b == "Megabyte" && x == "Kilobyte" || b == "Gigabyte" && x == "Megabyte" || b == "Terabyte" && x == "Gigabyte" ){
        r = (parseFloat(a) * 1e+3);
        document.formularioConversionUnidades.inputResuldado.value=r;
    }
    if(b == "Megabyte" && x == "Byte" || b == "Gigabyte" && x == "Kilobyte" || b == "Terabyte" && x == "Megabyte"){
        r = (parseFloat(a)* 1e+6);
        document.formularioConversionUnidades.inputResuldado.value=r;
    }
    if(b =="Byte" && x == "Megabyte" || b == "Kilobyte" && x == "Gigabyte" || b == "Megabyte" && x == "Terabyte"){
        r = (parseFloat(a) / 1e+6);
        document.formularioConversionUnidades.inputResuldado.value=r;
    }
    if(b == "Byte" && x == "Gigabyte" || b == "Kilobyte" && x == "Terabyte"){
        r = (parseFloat(a) / 1e+9);
        document.formularioConversionUnidades.inputResuldado.value=r;
    }
    if(b == "Gigabyte" && x == "Byte" || b == "Terabyte" && x == "Kilobyte"){
        r = (parseFloat(a) * 1e+9);
        document.formularioConversionUnidades.inputResuldado.value=r;
    }
    if(b == "Terabyte" && x == "Byte"){
        r = (parseFloat(a)* 1e+12);
        document.formularioConversionUnidades.inputResuldado.value=r;
    }
    if(b == "Byte" && x == "Terabyte"){
        r = (parseFloat(a) / 1e+12);
        document.formularioConversionUnidades.inputResuldado.value=r;
    }

    /*r=((parseInt(a)*parseInt(x))/parseInt(b)) * parseInt(b);
        document.formularioConversionUnidades.inputResuldado.value = r;

    r=(parseFloat(a)*parseFloat(x))/parseFloat(b);
   document.f1.c.value=r;*/
    
}
function calcularVenta() 
{
    var valorCompra =   document.formVentas.valor_compra.value;
    var porcentajeUtilidad  =   document.formVentas.porcentaje_utilidad.value;
    var porcentajeImpuestos =   document.formVentas.porcentaje_impuestos.value;
    var porcentaje_impuestos    =   (parseFloat(valorCompra)*parseFloat(porcentajeImpuestos))/100;
    var porcentaje_utilidad =   (parseFloat(valorCompra)*parseFloat(porcentajeUtilidad))/100;
    var r1 = parseFloat(valorCompra)+parseFloat(porcentaje_impuestos)+parseFloat(porcentaje_utilidad);
    var r2 = parseFloat(porcentaje_utilidad);
    document.formVentas.resultado_valor_venta.value =   r1;
    document.formVentas.resultado_ganancias.value   =   r2;        
}
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})