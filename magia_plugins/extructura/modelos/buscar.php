 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM extructura  
 WHERE  
 id like '%$busqueda%'    
 OR  funcion like '%$busqueda%'    
 OR  descripcion like '%$busqueda%'    
 OR  valor_entrega like '%$busqueda%'    
 OR  errores like '%$busqueda%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
