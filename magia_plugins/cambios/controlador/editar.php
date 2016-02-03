 <?php 
 $pagina = "cambios"; 
 //include 'header.php'; 
 include "magia_plugins/cambios/funciones.php"; 
 if (permisos_tiene_permiso('editar', 'cambios', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $funcion = mysql_real_escape_string($_REQUEST['funcion']);     
  $version = mysql_real_escape_string($_REQUEST['version']);     
  $descripcion = mysql_real_escape_string($_REQUEST['descripcion']);     
 include "magia_plugins/cambios/modelos/editar.php";  
 include "magia_plugins/cambios/vista/editar.php";  
 }else{ 
 $id = mysql_real_escape_string($_REQUEST['id']);      
 include "magia_plugins/cambios/modelos/ver.php"; 
 include "magia_plugins/cambios/reg/reg.php"; 
 include "magia_plugins/cambios/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso('editar', 'cambios', $u_id_usuario); 
 } 
