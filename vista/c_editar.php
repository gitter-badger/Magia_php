<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/controlador/editar.php
</h1>

<textarea class="form-control" rows="20">
&lt;?php
$pagina = "<?php echo $tabla ?>";
include 'header.php';
include "./plugins/<?php echo $tabla; ?>/funciones.php";
if (permisos_tiene_permiso('editar', '<?php echo $tabla; ?>', $u_grupo)) {
    $id_<?php echo $tabla ?> 		= mysql_real_escape_string($_REQUEST['id_<?php echo $tabla ?>']);     
    include "./plugins/<?php echo $tabla ?>/modelos/detalles.php";
    include "./plugins/<?php echo $tabla ?>/reg/reg.php";
    include "./plugins/<?php echo $tabla ?>/vista/editar.php";
} else {
    permisos_sin_permiso('editar', '<?php echo $tabla ?>', $u_id_usuario);
}
?>
</textarea>