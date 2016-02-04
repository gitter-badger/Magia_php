 <?php 
 $pagina = "relacionadas"; 
 include 'header.php';  
 include "magia_plugins/relacionadas/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'relacionadas', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);   
     include "magia_plugins/relacionadas/modelos/ver.php"; 
     include "magia_plugins/relacionadas/reg/reg.php"; 
     include "magia_plugins/relacionadas/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'relacionadas', $u_id_usuario); 
 } 
