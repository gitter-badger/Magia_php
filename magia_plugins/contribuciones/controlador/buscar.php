 <?php 
 $pagina = "contribuciones"; 
 //include 'header.php';  
 include "magia_plugins/contribuciones/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'contribuciones', $u_grupo)) { 
     $busqueda 		= mysql_real_escape_string($_REQUEST['busqueda']); 
     include "magia_plugins/contribuciones/modelos/busqueda.php"; 
     include "magia_plugins/contribuciones/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'contribuciones', $u_id_usuario); 
 } 
