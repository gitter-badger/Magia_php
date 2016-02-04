 <?php 
 $pagina = "extructura"; 
 include 'header.php';  
 include "magia_plugins/extructura/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'extructura', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);   
     include "magia_plugins/extructura/modelos/ver.php"; 
     include "magia_plugins/extructura/reg/reg.php"; 
     include "magia_plugins/extructura/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'extructura', $u_id_usuario); 
 } 
