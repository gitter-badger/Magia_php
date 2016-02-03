 <?php 
 $pagina = "cambios"; 
 //include 'header.php';  
 include "magia_plugins/cambios/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'cambios', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);        
     include "magia_plugins/cambios/modelos/ver.php"; 
     include "magia_plugins/cambios/reg/reg.php"; 
     include "magia_plugins/cambios/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'cambios', $u_id_usuario); 
 } 
