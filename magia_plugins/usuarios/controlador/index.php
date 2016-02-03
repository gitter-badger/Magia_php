 <?php 
 $pagina = "usuarios"; 
 //include 'header.php';  
 include "magia_plugins/usuarios/funciones.php"; 
 if (permisos_tiene_permiso('ver', 'usuarios', $u_grupo)) { 
     include "magia_plugins/usuarios/modelos/index.php"; 
     include "magia_plugins/usuarios/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'usuarios', $u_id_usuario); 
 } 
