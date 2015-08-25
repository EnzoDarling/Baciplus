<html>  

<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

// Recibimos por POST los datos procedentes del formulario  

$num_informe = $_POST["num_informe"];  
$fecha = date("Y-m-d");
$num_muestra = $_POST["num_muestra"];  
$tipo_muestra = $_POST["tipo_muestra"];
$sol_cultivo = $_POST["sol_cultivo"];
$fecha_primera_lectura = $_POST["fecha_primera_lectura"];
$primera_lectura = $_POST["primera_lectura"];
$fecha_segunda_lectura = $_POST["fecha_segunda_lectura"];
$segunda_lectura = $_POST["segunda_lectura"];

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db /*Nombre de base de datos */ ("baciplus", $conexion); 
$_GRABAR_SQL = "INSERT INTO /*Nombre de la tabla*/ tabla1 (num_informe,num_muestra,tipo_muestra,sol_cultivo,fecha_primera_lectura,primera_lectura,fecha_segunda_lectura,segunda_lectura) VALUES ('$num_informe','$num_muestra','$tipo_muestra','$sol_cultivo','$fecha_primera_lectura','$primera_lectura','$fecha_segunda_lectura','$segunda_lectura')";  
mysql_query($_GRABAR_SQL); 

echo "BIEN!";

mysql_close($conexion);  



?>  
</body>  

</html> 
