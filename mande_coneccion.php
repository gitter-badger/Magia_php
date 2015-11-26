<?php 
$conexion=mysql_connect("localhost","$username","$password")  or die ("Error en funcion: ".__FUNCTION__." Linea: ". __LINE__." en ".__FILE__." <br><br> ".mysql_error());	        
mysql_select_db("$dbname",$conexion)   
        
        or die ("Error en funcion: ".__FUNCTION__." Linea: ". __LINE__." en ".__FILE__." <br><br> ".mysql_error());	        
?>