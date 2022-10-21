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
    var a1 = document.formVentas.valorCompra.value;
    var b1 = document.formVentas.porcentajeUtilidad.value;
    var c1 = document.f1.c.value;
    var d1 = document.f1.d.value;
    var c1 = (parseFloat(a1)*parseFloat(b1))/100;
    var d1 = parseFloat(a1)+parseFloat(b1);
    document.f1.c.value=c1;
    document.f1.d.value=d1;        
}