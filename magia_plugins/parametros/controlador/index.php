 <?php 
 $pagina = "parametros"; 
 //include 'header.php';  
 include "magia_plugins/parametros/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'parametros', $u_grupo)) { 
     include "magia_plugins/parametros/modelos/index.php"; 
     include "magia_plugins/parametros/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'parametros', $u_id_usuario); 
 } 
