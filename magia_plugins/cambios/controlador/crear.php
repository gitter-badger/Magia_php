 <?php 
 $pagina = "cambios"; 
 //include 'header.php';  
 include "magia_plugins/cambios/funciones.php"; 
 if (permisos_tiene_permiso('crear', 'cambios', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $version = mysql_real_escape_string($_REQUEST['version']);     
  $descripcion = mysql_real_escape_string($_REQUEST['descripcion']);     
 include "magia_plugins/cambios/modelos/crear.php";  
 include "magia_plugins/cambios/vista/crear.php";  
 }else{ 
 include "magia_plugins/cambios/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso('crear', 'cambios', $u_id_usuario); 
 } 
