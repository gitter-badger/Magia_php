 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM autores  
 WHERE  
 id like '%$id%'    
 AND  nombre like '%$nombre%'    
 AND  apellidos like '%$apellidos%'    
 AND  email like '%$email%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
