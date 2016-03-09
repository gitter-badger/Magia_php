 <?php 
 $pagina = "articulos"; 
 if (permisos_tiene_permiso('editar', 'articulos', $u_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $id = mysql_real_escape_string($_REQUEST['id']);     
  $titulo = mysql_real_escape_string($_REQUEST['titulo']);     
  $contenido = mysql_real_escape_string($_REQUEST['contenido']);     
  $id_autor = mysql_real_escape_string($_REQUEST['id_autor']);     
  $fecha = mysql_real_escape_string($_REQUEST['fecha']);     
  $estatus = mysql_real_escape_string($_REQUEST['estatus']);     
 include "../admin/articulos/modelos/editar.php";  
 include "../admin/articulos/reg/reg.php"; 
 include "../admin/articulos/vista/editar.php";  
 }else{ 
 $id = mysql_real_escape_string($_REQUEST['id']);      
 include "../admin/articulos/modelos/ver.php"; 
 include "../admin/articulos/reg/reg.php"; 
 include "../admin/articulos/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso('editar', 'articulos', $u_id_usuario); 
 } 
