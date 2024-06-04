	<?
	include_once 'bd_conexion.php';
	//////////////// VALORES INICIALES ///////////////////////
	$tablaM="";
	$query="SELECT * FROM ciudades";
	///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
	if(isset($_POST['ciudades']))
	{
		$q=($_POST['ciudades']);
		$query="SELECT * FROM ciudades WHERE
			id_ciudad = $q";

	}
	$buscarCiudad = mysqli_query($conn,$query);

	if ($buscarCiudad->num_rows > 0)
	{
		while($filaCiudades= $buscarCiudad->fetch_assoc())
		{
	$tablaM.='<option value='.$filaCiudades['id_ciudad'].'>'.$filaCiudades['nombre_ciudad'].'</option>';
		}
	} else
		{
			$tablaM="No se encontraron coincidencias con sus criterios de bÃºsqueda.";
		}
	echo $tablaM;
	?>
