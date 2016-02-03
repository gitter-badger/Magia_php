 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 usuarios  
 WHERE id = '$id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
