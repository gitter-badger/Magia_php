 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 relacionadas  
 WHERE id = '$id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 