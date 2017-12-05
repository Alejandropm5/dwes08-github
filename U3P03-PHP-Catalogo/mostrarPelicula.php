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
?>
<table style='border:0'>
<tr style='background-color:lightblue'>
	<th>Nombre Película</th>
	<th>Imagen Película</th>
</tr>


<?php

if (!isset($_REQUEST["idAutor"])) die ("<h3>ERROR en la petición. Falta identificador del autor</h3>");
$id = $_REQUEST["idAutor"];


$resultado = $conexion -> query("SELECT * FROM autor WHERE idautor = ".$id);


$resultado = $conexion -> query("SELECT * FROM autor WHERE idAutor = ".$id);
if($resultado->num_rows === 0) die ("<h3>ERROR en la petición. Identificador de autor no válido</h3>");
$pelicula=$resultado->fetch_assoc();
echo "<h3>Peliculas dirigidas por ".$pelicula['Nombre_Autor'].":</h3>";
$Pais=$pelicula['Pais'];
$Imagen_Autor=$pelicula['Imagen_Autor'];





$resultado = $conexion -> query("SELECT pelicula.* FROM pelicula, autor WHERE (pelicula.idAutor = autor.idAutor) AND (autor.idAutor = '$id');");

if($resultado->num_rows === 0) echo "<p>Este autor no ha dirigido ninguna pelicula</p>";
else {
    echo "<ul>";
    while($pelicula=$resultado->fetch_assoc()) {
        
        echo "<li>"."Identificador de director: ".$pelicula['idAutor']."</li>";
        echo "<li>"."Nombre de director: ".$pelicula['Autor']."</li>";
        echo "<li><img src='img/".$Imagen_Autor."'width='100px' height='100px'></li>\n";
        echo "<li>"."Pais de procedencia: ".$Pais."</li>";
        
        echo "<tr bgcolor='lightgreen'>";
        echo "<td>".$pelicula['Nombre_Pelicula']."</td>\n";
        echo "<td><img src='img/".$pelicula['Imagen']."'width='100px' height='100px'></td>\n";
        echo "</tr>";
    }
    }
    echo "</ul>";

?>
</table>
</ul>
<a href="mostrarCatalogo.php">Volver al menu de peliculas</a>
</body>
</html>
