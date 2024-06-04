
	<?
	include_once 'bd_conexion.php';
	//	$conn = new mysqli('localhost', 'oporfin', 'Benny0320053.','consul91_oporfin');
	

	//////////////// VALORES INICIALES ///////////////////////
	$tabla="";
	$query="SELECT * FROM colonias";
	///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
	if(isset($_POST['colonias']))
	{
		$cp=$conn->real_escape_string($_POST['colonias']);
		$query="SELECT id_municipio,nombre_colonia FROM colonias WHERE
			cp = $cp";
	}
	$buscarColonia = mysqli_query($conn,$query);
			if (mysqli_num_rows($buscarColonia) > 0)
		{
		while($filaColonias = mysqli_fetch_array($buscarColonia))
		{
	$tabla.='<option value='.$filaColonias['id_municipio'].'>'.$filaColonias['nombre_colonia'].'</option>';
		}
	} else
		{
			$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
		}
	echo $tabla;
	?>
