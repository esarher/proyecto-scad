<?php 
include('funciones.php');
include('conexion_bd.php');
$conexion=mysqli_connect('localhost','root','','bd_proyecto');
$continente=$_POST['continente'];

	$sql="SELECT num_fichas from fichas where tipo_prog='$continente'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>SELECT 2 (paises)</label> <select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($result)) { $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[0]).'</option>';
	}

	echo  $cadena."</select>";
	

?>