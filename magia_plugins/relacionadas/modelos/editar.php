 <?php  
 $sql=mysql_query(" UPDATE relacionadas SET  
 id = $id  ,  funcion = $funcion  ,  funcion_relacionada = $funcion_relacionada  WHERE id = '$id' ",$conexion) or die ("Error: ".mysql_error());   
