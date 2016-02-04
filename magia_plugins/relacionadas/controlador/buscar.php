 <?php 
 $pagina = "relacionadas"; 
 //include 'header.php';  
 include "magia_plugins/relacionadas/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'relacionadas', $u_grupo)) { 
     $busqueda 		= mysql_real_escape_string($_REQUEST['busqueda']); 
     include "magia_plugins/relacionadas/modelos/busqueda.php"; 
     include "magia_plugins/relacionadas/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'relacionadas', $u_id_usuario); 
 } 
