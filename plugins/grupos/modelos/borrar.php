<?php
$sql=mysql_query("
DELETE FROM 
grupos 
WHERE
id_grupo = '$id_grupo'
",$conexion) or die ("Error ".mysql_error());

$mensaje = "Realizado";
?>

