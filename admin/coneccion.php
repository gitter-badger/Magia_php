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
//*******************************    
	case 'subeybaja.be':
	case 'www.subeybaja.be':
	case 'http://www.subeybaja.be':
	case 'www.subeybaja.be/facturas':
	case 'http://www.subeybaja.be/facturas':
        $hostname 	= "localhost";
        $username 	= "subeybaj_factura";
        $password 	= "XC;vXfCS1ueu"; 
        $dbname         = "subeybaj_factura"; 
        break;	
//*******************************    
	case 'latinos.be':
	case 'www.latinos.be':	
	case 'http://www.latinos.be':	
	case 'www.latinos.be/facturas':	
        case 'http://www.latinos.be/facturas':	
        $hostname 	= "localhost";
        $username 	= "latinos_factweb";
        $password 	= "lVg8MBb5G~h%"; 
        $dbname         = "latinos_factweb";   
        break;	
//*********************************
    default:
	die("INVALID HOST..");    
       
}
    $conexion=mysql_connect("$hostname","$username","$password")  or  die("Problemas en la conexion");
    mysql_select_db("$dbname",$conexion)   or  die("Problemas conexion en local"); 
?>