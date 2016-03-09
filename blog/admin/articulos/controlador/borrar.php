 <?php 
 $pagina = "articulos"; 
 if (permisos_tiene_permiso('borrar', 'articulos', $u_grupo)) { 
 $id 		= mysql_real_escape_string($_REQUEST['id']); 
 include "../admin/articulos/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'articulos', $u_id_usuario); 
 } 
