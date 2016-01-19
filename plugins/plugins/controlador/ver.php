 <?php 
 $pagina = "plugins"; 
 include 'header.php';  
 include "./plugins/plugins/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'plugins', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);   
     include "./plugins/plugins/controlador/ver.php"; 
     include "./plugins/plugins/reg/reg.php"; 
     include "./plugins/plugins/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'plugins', $u_id_usuario); 
 } 
