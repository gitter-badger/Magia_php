 <?php  
 $sql=mysql_query(" UPDATE autores SET  
 id = '$id'  
 ,  nombre = '$nombre'  
 ,  apellidos = '$apellidos'  
 ,  email = '$email'  
 WHERE id = '$id' ",$conexion) or die ("Error: ".mysql_error());   
