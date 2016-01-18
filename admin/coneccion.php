<?php	
switch($_SERVER['SERVER_NAME']) {
//*******************************    
	case '127.0.0.1':
	case 'localhost':
	case 'http://localhost/subeybaja/':
	case 'http://localhost/subeybaja/admin123/':            
        $hostname 	= "localhost";
        $username 	= "root";
        $password 	= ""; 
        $dbname         = "subeybaja";
        break;
//*********************************
    default:
	die("INVALID HOST..");    
       
}
    $conexion=mysql_connect("$hostname","$username","$password")  or  die("Problemas en la conexion");
    mysql_select_db("$dbname",$conexion)   or  die("Problemas conexion en local"); 
?>
