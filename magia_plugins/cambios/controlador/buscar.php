 <?php 
 $pagina = "cambios"; 
 //include 'header.php';  
 include "magia_plugins/cambios/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'cambios', $u_grupo)) { 
     $busqueda 		= mysql_real_escape_string($_REQUEST['busqueda']); 
     include "magia_plugins/cambios/modelos/busqueda.php"; 
     include "magia_plugins/cambios/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'cambios', $u_id_usuario); 
 } 
