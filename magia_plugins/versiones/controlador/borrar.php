 <?php 
 $pagina = "versiones"; 
 //include 'header.php';  
 include "magia_plugins/versiones/funciones.php"; 
 if (permisos_tiene_permiso('borrar', 'versiones', $u_grupo)) { 
 $id 		= mysql_real_escape_string($_REQUEST['id']); 
 include "magia_plugins/versiones/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'versiones', $u_id_usuario); 
 } 
