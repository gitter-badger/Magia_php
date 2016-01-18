 <?php 
 $pagina = "grupos"; 
 include 'header.php';  
 include "./plugins/grupos/funciones.php"; 
 if (permisos_tiene_permiso('borrar', 'grupos', $u_grupo)) { 
     include "./plugins/grupos/modelos/detalles.php"; 
     include "./plugins/grupos/reg/reg.php"; 
     include "./plugins/grupos/vista/borrar.php"; 
 } else { 
     permisos_sin_permiso('borrar', 'grupos', $u_id_usuario); 
 } 
