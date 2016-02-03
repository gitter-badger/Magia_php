 <?php 
 $pagina = "parametros"; 
 include 'header.php';  
 include "magia_plugins/parametros/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'parametros', $u_grupo)) { 
     $id 		= mysql_real_escape_string($_REQUEST['id']);   
     include "magia_plugins/parametros/modelos/ver.php"; 
     include "magia_plugins/parametros/reg/reg.php"; 
     include "magia_plugins/parametros/vista/ver.php"; 
 } else { 
     permisos_sin_permiso('ver', 'parametros', $u_id_usuario); 
 } 
