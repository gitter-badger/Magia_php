 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 versiones  
 WHERE id = '$id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
