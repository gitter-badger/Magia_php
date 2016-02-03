 <?php 
 $pagina = "extructura"; 
 //include 'header.php';  
 include "magia_plugins/extructura/funciones.php"; 
 if (permisos_tiene_permiso('borrar', 'extructura', $u_grupo)) { 
 $id 		= mysql_real_escape_string($_REQUEST['id']); 
 include "magia_plugins/extructura/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'extructura', $u_id_usuario); 
 } 
