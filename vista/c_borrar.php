<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/controlador/borrar.php
</h1>

<textarea class="form-control" rows="20">
&lt;?php
$pagina = "<?php echo $tabla ?>";
include 'header.php';
include "./plugins/<?php echo $tabla; ?>/funciones.php";
if (permisos_tiene_permiso('borrar', '<?php echo $tabla; ?>', $u_grupo)) {
    $id 		= mysql_real_escape_string($_REQUEST['id']);     

    include "./plugins/<?php echo $tabla ?>/modelos/borrar.php";
} else {
    permisos_sin_permiso('borrar', '<?php echo $tabla ?>', $u_id_usuario);
}
?>
</textarea>