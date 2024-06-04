
    /*obtengo los valores iniciales de mis elementos*/
 var slider = document.getElementById("estimador");
 var output = document.getElementById("valor");
 var salida = document.getElementById("pagoQuincenal");

/*formateador numero a moneda*/
 const f= new Intl.NumberFormat('en-US',{
style:'currency', currency:'USD',
   minimumFractionDigits:0
 });

 /*Cirre de formateador numero a moneda*/
 
 output.innerHTML =f.format((slider.value));/*Imprime valor inicial del importe solicitado*/
 
 /*Imprime los importes en el estimado (importe solicitado y pago quincenal estimado)*/
 slider.oninput = function() {
   output.innerHTML =f.format((this.value));
   salida1=((((this.value)/24/*Meses*/))+((this.value)*(.3517/*Tasa*//12/*meses del año*/))); /*Formula para el interes simple ( monto ente plazo) mas ( monto por tasa mensual)*/
   salida.innerHTML =f.format(salida1-(salida1/100*12)); /*Formula para el interes simple ( monto ente plazo) mas ( monto por tasa mensual)*/
   /*salida.innerHTML =f.format(salida1-(salida1/100*13.985)); /*le restamos el % para tasa del 30%*/
 }/*Cierre de Imprime los importes en el estimado (importe solicitado y pago quincenal estimado)*/
 
 /*Colorea el Input Range inicial*/
 var x =slider.value;
   var color = 'linear-gradient(90deg, rgb(117,252,117)' + x/1400 + '%, rgb(214,214,214)' + x/1000 + '%)';
   slider.style.background=color;/*Cierre Colorea el Input Range inicial*/
   
 slider.addEventListener("touchmove", function(){/*Colorea la actualizacion del Input Range para desktops*/

   var x =slider.value;
   var color = 'linear-gradient(90deg, rgb(117,252,117)' + x/1400 + '%, rgb(214,214,214)' + x/1000 + '%)';
   slider.style.background=color;
 }/*Ciere Colorea la actualizacion del Input Range/**//**/
 
 );
 slider.addEventListener("mousemove", function(){/*Colorea la actualizacion del Input Range para dispositvos moviles*/

   var x =slider.value;
   var color = 'linear-gradient(90deg, rgb(117,252,117)' + x/1400 + '%, rgb(214,214,214)' + x/1000 + '%)';
   slider.style.background=color;
 }/*Ciere Colorea la actualizacion del Input Range*/
 
 );
 