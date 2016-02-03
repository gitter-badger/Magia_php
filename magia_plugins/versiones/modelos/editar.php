 <?php  
 $sql=mysql_query(" UPDATE versiones SET  
 id = $id  ,  version = $version  ,  nombre = $nombre  WHERE id = '$id' ",$conexion) or die ("Error: ".mysql_error());   
