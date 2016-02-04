 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM ejemplos  
 WHERE  
 id like '%$busqueda%'    
 OR  funcion like '%$busqueda%'    
 OR  ejemplo like '%$busqueda%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
