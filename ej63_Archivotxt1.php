<!DOCTYPE html>
<html lang="es">

<head>     
	<meta charset="UTF-8">     
	<title>Guardar informacion</title> 
</head> 
<body>
	<h2>Guardar informaciion en un archivo</h2> 

<?php
$nombre="Jovany Nuñez";
file_put_contents("alumnos.txt",$nombre . PHP_EOL, FILE_APPEND);
echo"informacion guardada correctamente.";
echo"<br><br>";
?>
<?php
$nombre="Marisol Nuñez";
file_put_contents("alumnos.txt",$nombre . PHP_EOL, FILE_APPEND);
echo"informacion guardada correctamente.";
echo"<br><br>";
?>
<?php
echo"<br><br>";
$contenido=file_get_contents("alumnos.txt");
echo nl2br($contenido);
?>

</body>
</html>