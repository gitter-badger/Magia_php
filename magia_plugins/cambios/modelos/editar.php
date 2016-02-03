 <?php  
 $sql=mysql_query(" UPDATE cambios SET  
 id = $id  ,  funcion = $funcion  ,  version = $version  ,  descripcion = $descripcion  WHERE id = '$id' ",$conexion) or die ("Error: ".mysql_error());   
