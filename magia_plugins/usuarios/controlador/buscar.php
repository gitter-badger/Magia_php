 <?php 
 $pagina = "usuarios"; 
 //include 'header.php';  
 include "magia_plugins/usuarios/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'usuarios', $u_grupo)) { 
     $busqueda 		= mysql_real_escape_string($_REQUEST['busqueda']); 
     include "magia_plugins/usuarios/modelos/busqueda.php"; 
     include "magia_plugins/usuarios/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'usuarios', $u_id_usuario); 
 } 
