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
	<input type="text" name="nombre">
	<br><br>
	Edad:
	<input type="number" name="edad">
	<br><br>
	Pasatiempo:
	<input type="text" name="pasatiempo">
	<br><br>
	<button type="submit" name="Guardar">Guardar</button>
	
</form>

<br><br>

<form method="POST">
<button type="submit" name="Borrar">BorrarTodo</button>
<button name="borrar" value="programacion.txt">BorrarNombres</button>
<button name="borrar" value="edades.txt">BorrarEdades</button>
<button name="borrar" value="pasatiempos.txt">BorrarPasatiempos</button>
</form>


	<?php
if(isset($_POST["Guardar"])){
	$nombre=$_POST["nombre"];
	$ed=$_POST["edad"];
	$pa=$_POST["pasatiempo"];
	file_put_contents("programacion.txt",$nombre . PHP_EOL, FILE_APPEND);
	file_put_contents("edades.txt",$ed . PHP_EOL, FILE_APPEND);
	file_put_contents("pasatiempos.txt",$pa . PHP_EOL, FILE_APPEND);
echo"<p>informacion guardada correctamente.</p>";
}
?>
<h3>lista de alumnos de 3°A Programcion</h3>
<?php
if(file_exists("programacion.txt") && file_exists("edades.txt") && file_exists("pasatiempos.txt")){
	$contenido1=file_get_contents("programacion.txt");
	$contenido2=file_get_contents("edades.txt",);
	$contenido3=file_get_contents("pasatiempos.txt");
	echo nl2br("nombres " . $contenido1); 
	echo"<br>";
	echo nl2br("edad " . $contenido2);
	echo "<br>";
	echo nl2br("pasatiempos ". $contenido3);
}
?>
<?php
if(isset($_POST["Borrar"])){
	$archivos=["programcion.txt","edades.txt","pasatiempos.txt"];
	
	foreach ($archivos as $archivo){
		if(file_exists($archivo)){
			unlink($archivo);
		}
	}
	echo"Archivos Borrados";
	}

?>
<?php
if(isset($_POST["borrar"])){
	
	unlink($_POST["borrar"]);
	echo"Archivo Borrado";
	}

?>
</body>
</html>

