<?php 
    $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    }?>


<!-- Modal -->
<div class="modal fade" id="modalasignar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar Solicitud</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      

         <form action="includes/funciones/asignar_solicitud.php" method="POST">

            <div class="modal-body">
                 <div class="form-group">
                 
                 <input type="hidden" id="sol" name="sol"><!--Se manda por post la variable con el id de la solicitud hacia asignar_solicitud.php-->
                 <label for="promotor" class="form-label">Promotor</label>
                
                <select name="promotor" class="form-control"> <!--Se manda por post la variable con el promotor a asignar  hacia asignar_solicitud.php-->
                <?php 
                //////////////// muestra la lista de promotores a quienes se les puede asignar una solicitud ///////////////////////
                $select="";
                $query = "SELECT * FROM admins WHERE estado='1' AND rol_id='2'";
                $usuarios=$conn->query($query);
                if ($usuarios->num_rows > 0)
                {
                  while($filausuarios= $usuarios->fetch_assoc())
                  {
                $select.='<option value='.$filausuarios['id'].'>'.$filausuarios['nombre'].'</option>';
               
                  }
                } else
                  {
                    $select="No se encontraron coincidencias con sus criterios de búsqueda.";
                  }
                echo $select;
                ?>
              </select>                                   
             
            </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Asignar</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
