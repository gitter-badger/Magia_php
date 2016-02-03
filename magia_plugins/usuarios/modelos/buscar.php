 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM usuarios  
 WHERE  
 id_usuario like '%$busqueda%'    
 OR  nombres like '%$busqueda%'    
 OR  email like '%$busqueda%'    
 OR  estatus like '%$busqueda%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
