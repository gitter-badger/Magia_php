 <?php  
 $sql=mysql_query(" UPDATE parametros SET  
 id = $id  ,  funcion = $funcion  ,  parametro = $parametro  ,  descripcion = $descripcion  WHERE id = '$id' ",$conexion) or die ("Error: ".mysql_error());   
