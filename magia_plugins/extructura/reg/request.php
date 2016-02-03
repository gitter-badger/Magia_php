 <?php 
  $id = mysql_real_escape_string($_REQUEST['id']); 
  $funcion = mysql_real_escape_string($_REQUEST['funcion']); 
  $descripcion = mysql_real_escape_string($_REQUEST['descripcion']); 
  $valor_entrega = mysql_real_escape_string($_REQUEST['valor_entrega']); 
  $errores = mysql_real_escape_string($_REQUEST['errores']); 
