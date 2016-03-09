 <?php 
  $id = mysql_real_escape_string($_POST['id']); 
  $titulo = mysql_real_escape_string($_POST['titulo']); 
  $contenido = mysql_real_escape_string($_POST['contenido']); 
  $id_autor = mysql_real_escape_string($_POST['id_autor']); 
  $fecha = mysql_real_escape_string($_POST['fecha']); 
  $estatus = mysql_real_escape_string($_POST['estatus']); 
