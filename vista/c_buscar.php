<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/controlador/buscar.php
</h1>

<textarea class="form-control" rows="20">
&lt;?php
$pagina = "<?php echo $tabla;  ?>";
include 'header.php';
include "./plugins/<?php echo $tabla;  ?>/funciones.php";
if (permisos_tiene_permiso('ver', '<?php echo $tabla;  ?>', $u_grupo)) {
    include "./plugins/<?php echo $tabla;  ?>/modelos/index.php";
    include "./plugins/<?php echo $tabla;  ?>/vista/index.php";
} else {
    permisos_sin_permiso('ver', '<?php echo $tabla;  ?>', $u_id_usuario);
}
?>

</textarea>
