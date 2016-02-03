 <?php  
 $sql=mysql_query(" UPDATE contribuciones SET  
 id = $id  ,  funcion = $funcion  ,  id_usuario = $id_usuario  ,  contribucion = $contribucion  ,  fecha = $fecha  ,  estatus = $estatus  WHERE id = '$id' ",$conexion) or die ("Error: ".mysql_error());   
