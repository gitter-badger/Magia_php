 <?php 
 $pagina = "autores"; 
 if (permisos_tiene_permiso('ver', 'autores', $u_grupo)) { 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $nombre = mysql_real_escape_string($_REQUEST['nombre']);     
  $apellidos = mysql_real_escape_string($_REQUEST['apellidos']);     
  $email = mysql_real_escape_string($_REQUEST['email']);     
     include "../admin/autores/modelos/buscar.php"; 
     include "../admin/autores/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'autores', $u_id_usuario); 
 } 
