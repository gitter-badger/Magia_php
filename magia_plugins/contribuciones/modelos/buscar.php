 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM contribuciones  
 WHERE  
 id like '%$busqueda%'    
 OR  funcion like '%$busqueda%'    
 OR  id_usuario like '%$busqueda%'    
 OR  contribucion like '%$busqueda%'    
 OR  fecha like '%$busqueda%'    
 OR  estatus like '%$busqueda%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
