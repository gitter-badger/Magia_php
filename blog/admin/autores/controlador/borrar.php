 <?php 
 $pagina = "autores"; 
 if (permisos_tiene_permiso('borrar', 'autores', $u_grupo)) { 
 $id 		= mysql_real_escape_string($_REQUEST['id']); 
 include "../admin/autores/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'autores', $u_id_usuario); 
 } 
