<?php 
$sql=mysql_query("SELECT * FROM articulos ORDER BY id DESC ",$conexion) or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .'  '.mysql_error());	  
