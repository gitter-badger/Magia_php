 <?php 
 $pagina = "mama"; 
 include 'header.php';  
 include "./plugins/mama/funciones.php"; 
 if (permisos_tiene_permiso('crear', 'mama', $u_grupo)) { 
     include "./plugins/mama/vista/crear.php"; 
 } else { 
     permisos_sin_permiso('crear', 'mama', $u_id_usuario); 
 } 
