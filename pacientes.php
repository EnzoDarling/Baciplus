<html>  

<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

// Recibimos por POST los datos procedentes del formulario  

$dni = $_POST["dni"];  
$dire = $_POST["dire"];  
$telefono = $_POST["telefono"];
$num_orden = $_POST["num_orden"];


$conexion = mysql_connect("localhost", "root", "");
mysql_select_db /*Nombre de base de datos */ ("baciplus", $conexion); 
$_GRABAR_SQL = "INSERT INTO /*Nombre de la tabla*/ tabla1 (dni,dire,telefono,num_orden) VALUES ('$dni','$dire','$telefono','$num_orden')";  
mysql_query($_GRABAR_SQL); 

echo "BIEN!";

mysql_close($conexion);  



?>  
</body>  

</html> 
