	<?
	include_once 'bd_conexion.php';
	//////////////// VALORES INICIALES ///////////////////////
	$tablaM="";
	$query="SELECT * FROM municipios";
	///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
	if(isset($_POST['municipios']))
	{
		$q=($_POST['municipios']);
		$query="SELECT id_ciudad,nombre_municipio FROM municipios WHERE
			id_municipio = $q";

	}
	$buscarMunicipio = mysqli_query($conn,$query);
	
	if ($buscarMunicipio->num_rows > 0)
	{
		while($filaMunicipios= $buscarMunicipio->fetch_assoc())
		{
	$tablaM.='<option value='.$filaMunicipios['id_ciudad'].'>'.$filaMunicipios['nombre_municipio'].'</option>';
		}
	} else
		{
			$tablaM="No se encontraron coincidencias con sus criterios de bÃºsqueda.";
		}
	echo $tablaM;
	?>
