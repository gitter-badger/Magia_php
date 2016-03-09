 <?php 
 $pagina = "autores"; 
 if (permisos_tiene_permiso('ver', 'autores', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);   
     include "../admin/autores/modelos/ver.php"; 
     include "../admin/autores/reg/reg.php"; 
     include "../admin/autores/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'autores', $u_id_usuario); 
 } 
