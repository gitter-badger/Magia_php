 <?php 
 $pagina = "extructura"; 
 //include 'header.php';  
 include "magia_plugins/extructura/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'extructura', $u_grupo)) { 
     $busqueda 		= mysql_real_escape_string($_REQUEST['busqueda']); 
     include "magia_plugins/extructura/modelos/busqueda.php"; 
     include "magia_plugins/extructura/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'extructura', $u_id_usuario); 
 } 
