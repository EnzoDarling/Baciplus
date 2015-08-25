<html>  

<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

// Recibimos por POST los datos procedentes del formulario  

$id_turno = $_POST["id_turno"];  
$apellido = $_POST["apellido"];
$nombre = $_POST["nombre"];  
$fecha = date("Y-m-d");
$hora = $_POST["hora"];


$conexion = mysql_connect("localhost", "root", "");
mysql_select_db /*Nombre de base de datos */ ("baciplus", $conexion); 
$_GRABAR_SQL = "INSERT INTO /*Nombre de la tabla*/ tabla1 (id_turno,apellido,nombre,fecha,hora) VALUES ('$id_turno','$apellido','$nombre','$fecha','$hora')";  
mysql_query($_GRABAR_SQL); 

echo "Datos guardados!";

mysql_close($conexion);  



?>  
</body>  

</html> 
