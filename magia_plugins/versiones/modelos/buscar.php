 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM versiones  
 WHERE  
 id like '%$busqueda%'    
 OR  version like '%$busqueda%'    
 OR  nombre like '%$busqueda%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
