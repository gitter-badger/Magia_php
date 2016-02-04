 <?php 
 $pagina = "usuarios"; 
 include 'header.php';  
 include "magia_plugins/usuarios/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'usuarios', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);   
     include "magia_plugins/usuarios/modelos/ver.php"; 
     include "magia_plugins/usuarios/reg/reg.php"; 
     include "magia_plugins/usuarios/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'usuarios', $u_id_usuario); 
 } 
