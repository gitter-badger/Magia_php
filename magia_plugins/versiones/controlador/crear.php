 <?php 
 $pagina = "versiones"; 
 //include 'header.php';  
 include "magia_plugins/versiones/funciones.php"; 
 if (permisos_tiene_permiso('crear', 'versiones', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='crear'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $version = mysql_real_escape_string($_REQUEST['version']);     
  $nombre = mysql_real_escape_string($_REQUEST['nombre']);     
 include "magia_plugins/versiones/modelos/crear.php";  
 include "magia_plugins/versiones/vista/crear.php";  
 }else{ 
 include "magia_plugins/versiones/vista/crear.php";  
 }          
 } else { 
     permisos_sin_permiso('crear', 'versiones', $u_id_usuario); 
 } 
