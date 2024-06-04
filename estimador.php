
<form action="form-registro-nombre.php" method = "POST">
  <div class="slideContainer">
    <h3>¿Cuánto <span class="remarcado">dinero</span> necesitas?</h3>
    <label for="estimador"><p class="importeSolicitado"><span id="valor"  class="importeSolicitado"></span></p></label>
  <input type="range" name="importe" min="10000" max="100000" step="1000" value ="30000" id="estimador" class="slider">
    <p class="nota">Pago mensual estimado </p>
    <P class="importeQuincenal"><span id="pagoQuincenal">$1,873.75</span></P>

<input type="submit" id="validate" class="button principal" value="Solicítalo ahora!" >
<p class="notapie">Su pago puede variar dependiendo las condiciones y el plazo de su crédito. Pago mensual calculado para un crédito a 24 meses con una tasa del 36%.</p>
</div> <!--SlideContainet-->
</form>  
<script type="text/javascript" src="js/estimador.js"></script>
