 <?php 
 $pagina = "ejemplos"; 
 //include 'header.php';  
 include "magia_plugins/ejemplos/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'ejemplos', $u_grupo)) { 
     $busqueda 		= mysql_real_escape_string($_REQUEST['busqueda']); 
     include "magia_plugins/ejemplos/modelos/busqueda.php"; 
     include "magia_plugins/ejemplos/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'ejemplos', $u_id_usuario); 
 } 
