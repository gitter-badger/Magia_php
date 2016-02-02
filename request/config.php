<?php
$fp = fopen('admin/config.php', 'w');
$c = '<?php '; 
$c .= ' $path_magia_plugins = "'.$_GET['path_magia_plugins'].'";';
fwrite($fp, $c);
fclose($fp);






