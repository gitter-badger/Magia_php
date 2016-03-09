 <?php 
  $id = mysql_real_escape_string($_GET['id']); 
  $titulo = mysql_real_escape_string($_GET['titulo']); 
  $contenido = mysql_real_escape_string($_GET['contenido']); 
  $id_autor = mysql_real_escape_string($_GET['id_autor']); 
  $fecha = mysql_real_escape_string($_GET['fecha']); 
  $estatus = mysql_real_escape_string($_GET['estatus']); 
