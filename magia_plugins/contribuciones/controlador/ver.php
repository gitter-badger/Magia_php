 <?php 
 $pagina = "contribuciones"; 
 include 'header.php';  
 include "magia_plugins/contribuciones/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'contribuciones', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);   
     include "magia_plugins/contribuciones/modelos/ver.php"; 
     include "magia_plugins/contribuciones/reg/reg.php"; 
     include "magia_plugins/contribuciones/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'contribuciones', $u_id_usuario); 
 } 
