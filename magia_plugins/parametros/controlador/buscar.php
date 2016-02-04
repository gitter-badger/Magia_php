 <?php 
 $pagina = "parametros"; 
 //include 'header.php';  
 include "magia_plugins/parametros/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'parametros', $u_grupo)) { 
     $busqueda 		= mysql_real_escape_string($_REQUEST['busqueda']); 
     include "magia_plugins/parametros/modelos/busqueda.php"; 
     include "magia_plugins/parametros/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'parametros', $u_id_usuario); 
 } 
