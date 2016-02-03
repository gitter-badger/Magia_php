 <?php 
 $pagina = "ejemplos"; 
 //include 'header.php';  
 include "magia_plugins/ejemplos/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'ejemplos', $u_grupo)) { 
     include "magia_plugins/ejemplos/modelos/index.php"; 
     include "magia_plugins/ejemplos/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'ejemplos', $u_id_usuario); 
 } 
