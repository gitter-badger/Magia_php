 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 cambios  
 WHERE id = '$id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
