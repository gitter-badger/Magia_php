 <?php 
 $pagina = "versiones"; 
 //include 'header.php'; 
 include "magia_plugins/versiones/funciones.php"; 
 if (permisos_tiene_permiso('editar', 'versiones', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $version = mysql_real_escape_string($_REQUEST['version']);     
  $nombre = mysql_real_escape_string($_REQUEST['nombre']);     
 include "magia_plugins/versiones/modelos/editar.php";  
 include "magia_plugins/versiones/vista/editar.php";  
 }else{ 
 $id = mysql_real_escape_string($_REQUEST['id']);      
 include "magia_plugins/versiones/modelos/ver.php"; 
 include "magia_plugins/versiones/reg/reg.php"; 
 include "magia_plugins/versiones/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso('editar', 'versiones', $u_id_usuario); 
 } 
