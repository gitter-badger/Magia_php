 <?php 
 $pagina = "autores"; 
 if (permisos_tiene_permiso('editar', 'autores', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $nombre = mysql_real_escape_string($_REQUEST['nombre']);     
  $apellidos = mysql_real_escape_string($_REQUEST['apellidos']);     
  $email = mysql_real_escape_string($_REQUEST['email']);     
 include "../admin/autores/modelos/editar.php";  
 include "../admin/autores/reg/reg.php"; 
 include "../admin/autores/vista/editar.php";  
 }else{ 
 $id = mysql_real_escape_string($_REQUEST['id']);      
 include "../admin/autores/modelos/ver.php"; 
 include "../admin/autores/reg/reg.php"; 
 include "../admin/autores/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso('editar', 'autores', $u_id_usuario); 
 } 
