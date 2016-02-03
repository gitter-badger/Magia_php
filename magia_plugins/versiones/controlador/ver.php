 <?php 
 $pagina = "versiones"; 
 include 'header.php';  
 include "magia_plugins/versiones/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'versiones', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);   
     include "magia_plugins/versiones/modelos/ver.php"; 
     include "magia_plugins/versiones/reg/reg.php"; 
     include "magia_plugins/versiones/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'versiones', $u_id_usuario); 
 } 
