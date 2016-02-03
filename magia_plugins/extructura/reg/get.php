 <?php 
  $id = mysql_real_escape_string($_GET['id']); 
  $funcion = mysql_real_escape_string($_GET['funcion']); 
  $descripcion = mysql_real_escape_string($_GET['descripcion']); 
  $valor_entrega = mysql_real_escape_string($_GET['valor_entrega']); 
  $errores = mysql_real_escape_string($_GET['errores']); 
