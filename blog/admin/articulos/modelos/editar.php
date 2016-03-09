 <?php  
 $sql=mysql_query(" UPDATE articulos SET  
 id = '$id'  
 ,  titulo = '$titulo'  
 ,  contenido = '$contenido'  
 ,  id_autor = '$id_autor'  
 ,  fecha = '$fecha'  
 ,  estatus = '$estatus'  
 WHERE id = '$id' ",$conexion) or die ("Error: ".mysql_error());   
