<html>  

<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

// Recibimos por POST los datos procedentes del formulario  

$num_muestra = $_POST["num_muestra"];  
$lectura = $_POST["lectura"];
$tipo_muestra = $_POST["tipo_muestra"];  
$sol_cultivo = $_POST["sol_cultivo"];
$num_orden = $_POST["num_orden"];
$num_cultivo = $_POST["num_cultivo"];


$conexion = mysql_connect("localhost", "root", "");
mysql_select_db /*Nombre de base de datos */ ("baciplus", $conexion); 
$_GRABAR_SQL = "INSERT INTO /*Nombre de la tabla*/ muestra (num_muestra,lectura,tipo_muestra,sol_cultivo,num_orden,num_cultivo) VALUES ('$num_muestra','$lectura','$tipo_muestra','$sol_cultivo','$num_orden','$num_cultivo')";  
mysql_query($_GRABAR_SQL); 

echo "BIEN!";

mysql_close($conexion);  



?>  
</body>  

</html> 
