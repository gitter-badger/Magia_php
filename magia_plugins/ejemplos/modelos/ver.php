 <?php 
$sql=mysql_query( 
 "SELECT * FROM ejemplos WHERE id = '$id' ORDER BY id DESC   ",$conexion) or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	