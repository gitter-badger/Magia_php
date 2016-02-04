 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 extructura  
 WHERE id = '$id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
