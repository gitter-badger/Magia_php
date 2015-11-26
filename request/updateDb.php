<?php
$fp = fopen('bd.php', 'w');
$c = '<?php '; 
$c .= ' $hostname = "'.$_GET['hostname'].'";';
$c .= ' $dbname = "'.$_GET['dbname'].'";';
$c .= ' $username = "'.$_GET['username'].'";';
$c .= ' $password = "";';
$c .= ' ?>';
fwrite($fp, $c);
fclose($fp);
?>


