<!DOCTYPE html>
<html lang="es">

<head>     
	<meta charset="UTF-8">     
	<title>Guardar informacion</title> 
</head> 
<body>
	<h2>Guardar informaciion en un archivo</h2> 
	<form method="POST">
	Nombre del Alumno:
	<input type="text" name="nombre" required>
	<br><br>
	<button type="submit" name="Guardar">Guardar</button>
</form>
	<?php
if(isset($_POST["Guardar"])){
	$nombre=$_POST["nombre"];
	file_put_contents("alumnos programacion.txt",$nombre . PHP_EOL, FILE_APPEND);
echo"<p>informacion guardada correctamente.</p>";
}
?>
<h3>lista de alumnos de 3°A Programcion</h3>
<?php
if(file_exists("alumnos programacion.txt")){
	$contenido=file_get_contents("alumnos programacion.txt");
	echo nl2br($contenido);
}
?>
</body>
</html>

