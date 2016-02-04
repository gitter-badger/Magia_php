 <?php  
 $sql=mysql_query(" UPDATE usuarios SET  
 id_usuario = $id_usuario  ,  nombres = $nombres  ,  email = $email  ,  estatus = $estatus  WHERE id = '$id' ",$conexion) or die ("Error: ".mysql_error());   
