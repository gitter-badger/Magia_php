 <?php 
 $pagina = "usuarios"; 
 //include 'header.php'; 
 include "magia_plugins/usuarios/funciones.php"; 
 if (permisos_tiene_permiso('editar', 'usuarios', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $id_usuario = mysql_real_escape_string($_REQUEST['id_usuario']);     
  $nombres = mysql_real_escape_string($_REQUEST['nombres']);     
  $email = mysql_real_escape_string($_REQUEST['email']);     
  $estatus = mysql_real_escape_string($_REQUEST['estatus']);     
 include "magia_plugins/usuarios/modelos/editar.php";  
 include "magia_plugins/usuarios/vista/editar.php";  
 }else{ 
 $id = mysql_real_escape_string($_REQUEST['id']);      
 include "magia_plugins/usuarios/modelos/ver.php"; 
 include "magia_plugins/usuarios/reg/reg.php"; 
 include "magia_plugins/usuarios/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso('editar', 'usuarios', $u_id_usuario); 
 } 
