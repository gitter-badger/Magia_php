 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM relacionadas  
 WHERE  
 id like '%$busqueda%'    
 OR  funcion like '%$busqueda%'    
 OR  funcion_relacionada like '%$busqueda%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
