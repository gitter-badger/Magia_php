 <?php 
 $pagina = "plugins"; 
 include 'header.php';  
 include "./plugins/plugins/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'plugins', $u_grupo)) { 
     $busqueda 		= mysql_real_escape_string($_REQUEST['busqueda']); 
     include "./plugins/plugins/modelos/busqueda.php"; 
     include "./plugins/plugins/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'plugins', $u_id_usuario); 
 } 
