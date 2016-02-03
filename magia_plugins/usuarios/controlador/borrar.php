 <?php 
 $pagina = "usuarios"; 
 //include 'header.php';  
 include "magia_plugins/usuarios/funciones.php"; 
 if (permisos_tiene_permiso('borrar', 'usuarios', $u_grupo)) { 
 $id 		= mysql_real_escape_string($_REQUEST['id']); 
 include "magia_plugins/usuarios/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'usuarios', $u_id_usuario); 
 } 
