<?php 
$sql=mysql_query(
        "SELECT * FROM "
        . "grupos WHERE id_grupo = '$id_grupo' " 
        . "ORDER BY id_grupo DESC   ",$conexion) or die ("Error:".mysql_error());
$reg = mysql_fetch_array($sql);
	
?>
