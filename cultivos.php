<html>  

<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

// Recibimos por POST los datos procedentes del formulario  

$num_cultivo = $_POST["num_cultivo"];  
$fecha_primera_lectura = $_POST["fecha_primera_lectura"];
$primera_lectura = $_POST["primera_lectura"];  
$fecha_segunda_lectura = $_POST["fecha_segunda_lectura"];
$segunda_lectura = $_POST["segunda_lectura"];
$sol_cultivo = $_POST["sol_cultivo"];
$resultado = $_POST["resultado"];

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db /*Nombre de base de datos */ ("baciplus", $conexion); 
$_GRABAR_SQL = "INSERT INTO /*Nombre de la tabla*/ tabla1 (primera_lectura,fecha_segunda_lectura,segunda_lectura,sol_cultivo,resultado) VALUES ('$primera_lectura','$fecha_segunda_lectura','$segunda_lectura','$sol_cultivo','$resultado')";  
mysql_query($_GRABAR_SQL); 

echo "BIEN!";

mysql_close($conexion);  



?>  
</body>  

</html> 
