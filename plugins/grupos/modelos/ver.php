<?php 
$sql=mysql_query(
        "SELECT * FROM"
        . "grupos WHERE id_grupos = '$id_grupos' " 
        . "ORDER BY id_grupos DESC   ",$conexion) or die ("Error:".mysql_error());
$reg = mysql_fetch_array($sql);
	
?>
