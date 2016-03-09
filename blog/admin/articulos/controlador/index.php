 <?php 
 $pagina = "articulos"; 
 if (permisos_tiene_permiso('ver', 'articulos', $u_grupo)) { 
     include "../admin/articulos/modelos/index.php"; 
     include "../admin/articulos/vista/index.php"; 
 } else { 
     permisos_sin_permiso('ver', 'articulos', $u_id_usuario); 
 } 
