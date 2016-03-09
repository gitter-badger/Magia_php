 <?php 
$sql=mysql_query( 
 "SELECT * FROM autores WHERE id = '$id' ORDER BY id DESC   ",$conexion) 	  
 or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 $reg = mysql_fetch_array($sql);	  
