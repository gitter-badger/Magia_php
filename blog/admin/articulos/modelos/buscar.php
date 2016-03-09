 <?php 
 $sql=mysql_query( 
         "SELECT *  
 FROM articulos  
 WHERE  
 id like '%$id%'    
 AND  titulo like '%$titulo%'    
 AND  contenido like '%$contenido%'    
 AND  id_autor like '%$id_autor%'    
 AND  fecha like '%$fecha%'    
 AND  estatus like '%$estatus%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
