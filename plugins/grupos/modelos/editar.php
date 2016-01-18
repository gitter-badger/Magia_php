<?php 
$sql=mysql_query(" UPDATE grupos SET 
grupo = '$grupo'
     WHERE id_grupo = $id_grupo ",$conexion) or die ("Error: ".mysql_error());  





