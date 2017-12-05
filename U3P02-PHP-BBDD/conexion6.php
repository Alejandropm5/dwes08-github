<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de animales</h2>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$cuidador = "Nombre";
include 'Animal.php';
?>

<ul>
<?php
$conexion = new mysqli($servidor,$usuario,$clave,"animales");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
?>

<table style='border:0'>
<tr style='background-color:lightblue'>
	<th>Chip</th>
	<th>Nombre</th>
	<th>Especie</th>
	<th>Imagen</th>
</tr>

<?php
$resultado = $conexion -> query("SELECT chip, nombre, especie, imagen FROM animal ORDER BY nombre");
if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
//$fila=$resultado->fetch_assoc();
while ($animal = $resultado->fetch_object('Animal')) {
	
	echo "<tr bgcolor='lightgreen'>";
	echo "<td>".$animal->getChip()."</td>\n";
	echo "<td>".$animal->getNombre()."</td>\n";
	echo "<td>".$animal->getEspecie()."</td>\n";
	echo "<td><img src='Img/".$animal->getimagen()."'width='300px' height='200px'></td>\n";
	echo "</tr>";
}
?>
</table>
</ul>
<a href="conexion4.php">Conexion4</a>
<a href="conexion2.php">Conexion2</a>
<a href="conexion3.php">Conexion3</a>
<a href="cuidador.php">Cuidadores</a>
<a href="conexion5.php">Conexion5</a>
</body>
</html>
