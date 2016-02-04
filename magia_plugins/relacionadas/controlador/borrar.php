 <?php 
 $pagina = "relacionadas"; 
 //include 'header.php';  
 include "magia_plugins/relacionadas/funciones.php"; 
 if (permisos_tiene_permiso('borrar', 'relacionadas', $u_grupo)) { 
 $id 		= mysql_real_escape_string($_REQUEST['id']); 
 include "magia_plugins/relacionadas/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'relacionadas', $u_id_usuario); 
 } 
