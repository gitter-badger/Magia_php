 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM parametros  
 WHERE  
 id like '%$busqueda%'    
 OR  funcion like '%$busqueda%'    
 OR  parametro like '%$busqueda%'    
 OR  descripcion like '%$busqueda%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
