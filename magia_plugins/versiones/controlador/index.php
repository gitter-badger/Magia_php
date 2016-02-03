 <?php 
 $pagina = "versiones"; 
 //include 'header.php';  
 include "magia_plugins/versiones/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'versiones', $u_grupo)) { 
     include "magia_plugins/versiones/modelos/index.php"; 
     include "magia_plugins/versiones/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'versiones', $u_id_usuario); 
 } 
