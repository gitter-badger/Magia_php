 <?php 
  $id = mysql_real_escape_string($_POST['id']); 
  $funcion = mysql_real_escape_string($_POST['funcion']); 
  $descripcion = mysql_real_escape_string($_POST['descripcion']); 
  $valor_entrega = mysql_real_escape_string($_POST['valor_entrega']); 
  $errores = mysql_real_escape_string($_POST['errores']); 
