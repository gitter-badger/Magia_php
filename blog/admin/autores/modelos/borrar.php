 <?php 
 $sql=mysql_query(" 
 DELETE FROM  
 autores  
 WHERE id = '$id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
