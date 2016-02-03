 <?php  
 $sql=mysql_query(" UPDATE extructura SET  
 id = $id  ,  funcion = $funcion  ,  descripcion = $descripcion  ,  valor_entrega = $valor_entrega  ,  errores = $errores  WHERE id = '$id' ",$conexion) or die ("Error: ".mysql_error());   
