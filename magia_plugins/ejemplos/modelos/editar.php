 <?php  
 $sql=mysql_query(" UPDATE ejemplos SET  
 id = $id  ,  funcion = $funcion  ,  ejemplo = $ejemplo  WHERE id = '$id' ",$conexion) or die ("Error: ".mysql_error());   
