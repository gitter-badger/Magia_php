 <?php 
 $pagina = "articulos"; 
 if (permisos_tiene_permiso('ver', 'articulos', $u_grupo)) { 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $titulo = mysql_real_escape_string($_REQUEST['titulo']);     
  $contenido = mysql_real_escape_string($_REQUEST['contenido']);     
  $id_autor = mysql_real_escape_string($_REQUEST['id_autor']);     
  $fecha = mysql_real_escape_string($_REQUEST['fecha']);     
  $estatus = mysql_real_escape_string($_REQUEST['estatus']);     
     include "../admin/articulos/modelos/buscar.php"; 
     include "../admin/articulos/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso('ver', 'articulos', $u_id_usuario); 
 } 
