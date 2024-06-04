
<?php
	

	include_once 'includes/templates/header.php';
  include_once 'includes/templates/slide-bar.php';


	
 if($rol_id == 2) {?>

<form action="recibe_excel_validando.php" method="POST" enctype="multipart/form-data"/>
        <div class="file-input text-center">
            <input  type="file" name="dataCliente" id="file-input" class="file-input__input"/>
            <label class="file-input__label" for="file-input"> </label>           
          </div>
      <div class="text-center mt-12">
          <input type="submit" name="subir" class="btn-enviar" value="Subir Excel"/>
      </div>
      </form>
      <?php }?>
</body>
</html>
