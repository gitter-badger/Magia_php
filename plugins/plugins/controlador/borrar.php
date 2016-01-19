 <?php 
 $pagina = "plugins"; 
 include 'header.php';  
 include "./plugins/plugins/funciones.php"; 
 if (permisos_tiene_permiso('borrar', 'plugins', $u_grupo)) { 
 $id 		= mysql_real_escape_string($_REQUEST['id']); 
 include "./plugins/plugins/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'plugins', $u_id_usuario); 
 } 
