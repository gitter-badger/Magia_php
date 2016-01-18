<?php 
$sql=mysql_query(
        "SELECT * FROM grupos ORDER BY id_grupo    ",$conexion) or die ("Error:".mysql_error());	
?>