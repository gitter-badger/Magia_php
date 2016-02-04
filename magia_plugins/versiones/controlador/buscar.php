 <?php 
 $pagina = "versiones"; 
 //include 'header.php';  
 include "magia_plugins/versiones/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'versiones', $u_grupo)) { 
     $busqueda 		= mysql_real_escape_string($_REQUEST['busqueda']); 
     include "magia_plugins/versiones/modelos/busqueda.php"; 
     include "magia_plugins/versiones/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'versiones', $u_id_usuario); 
 } 
