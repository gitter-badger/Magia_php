 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM cambios  
 WHERE  
 id like '%$busqueda%'    
 OR  funcion like '%$busqueda%'    
 OR  version like '%$busqueda%'    
 OR  descripcion like '%$busqueda%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
