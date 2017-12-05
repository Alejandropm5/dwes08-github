<html>
<head>
	<title>Base de datos </title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Base de datos de Películas</h2>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$cuidador = "Nombre";
include 'Pelicula.php';
?>

<ul>
<?php
$conexion = new mysqli($servidor,$usuario,$clave,"catalogo08");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
?>

<table style='border:0'>
<tr style='background-color:lightblue'>
	<th>ID</th>
	<th>Autor &#9661 &#9651</th>
	<th>ID Autor</th>
	<th>Nombre_Película &#9661 &#9651</th>
	<th>Imagen</th>
</tr>

<?php
$resultado = $conexion -> query("SELECT * FROM pelicula");
if($resultado->num_rows === 0) echo "<p>No hay peliculas en la base de datos</p>";


while ($pelicula = $resultado->fetch_assoc()) {
	
	echo "<tr bgcolor='lightgreen'>";
	echo "<td>".$pelicula['ID']."</td>\n";
	echo "<td>".$pelicula['Autor']."</td>\n";
	echo "<td>".$pelicula['idAutor']."</td>\n";
	echo "<td><a href='mostrarPelicula.php?idAutor=$pelicula[idAutor]'>$pelicula[Nombre_Pelicula]</a></td>\n";
	echo "<td><img src='img/".$pelicula['Imagen']."'width='100px' height='100px'></td>\n";
	echo "</tr>";
}
?>
</table>
</ul>
</body>
</html>

//Ordenar

//$resultadoASC1 = $conexion -> query("$resultado = $conexion -> query("SELECT * FROM pelicula ORDER BY Autor ASC");
//$resultadoDESC1 = $conexion -> query("$resultado = $conexion -> query("SELECT * FROM pelicula ORDER BY Autor DESC");

//$resultadoASC2 = $conexion -> query("$resultado = $conexion -> query("SELECT * FROM pelicula ORDER BY Nombre_Pelicula ASC");
//$resultadoDESC2 = $conexion -> query("$resultado = $conexion -> query("SELECT * FROM pelicula ORDER Nombre_Pelicula Autor DESC");

