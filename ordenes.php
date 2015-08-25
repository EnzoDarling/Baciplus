<html>  

<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

// Recibimos por POST los datos procedentes del formulario  

$nummuestra = $_POST["num_orden"];  
$lectura = $_POST["apellido"];  
$tipomuestra = $_POST["nombre"];
$solicitudcultivo = $_POST["sol_cultivo"];
$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("baciplus", $conexion);


$_GRABAR_SQL = "INSERT INTO muestra (num_orden,apellido,nombre,sol_cultivo) VALUES ('$num_orden','$apellido','$nombre','$sol_cultivo')";  
mysql_query($_GRABAR_SQL); 

echo "BIEN!";

mysql_close($conexion);  



?>  
</body>  

</html> 
