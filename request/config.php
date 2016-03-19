<?php
$fp = fopen('admin/config.php', 'w');
$c = '<?php ' ; 
$c .= ' $path_instalacion_plugins = "'.$_GET['path_instalacion_plugins'].'";';
$c .= ' $path_plugins = "'.$_GET['path_plugins'].'";';
$c .= ' $path_config = "'.$_GET['path_config'].'";';
$c .= ' $path_plugins_controlador = "'.$_GET['path_plugins_controlador'].'";';
$c .= ' $path_plugins_modelos = "'.$_GET['path_plugins_modelos'].'";';
$c .= ' $path_plugins_vista = "'.$_GET['path_plugins_vista'].'";';
$c .= ' $path_plugins_reg = "'.$_GET['path_plugins_reg'].'";';
fwrite($fp, $c);
fclose($fp);






