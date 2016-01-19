<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/controlador/editar.php
</h1>

<textarea class="form-control" rows="20">
&lt;?php
$pagina = "<?php echo $tabla;  ?>";
include 'header.php';
include "./plugins/<?php echo $tabla;  ?>/funciones.php";
if (permisos_tiene_permiso('editar', '<?php echo $tabla;  ?>', $u_grupo)) {
    if(isset($_REQUEST['a'])=='editar'){

<?php 
foreach($resultado as $reg ) {
include '../magia/reg/reg.php';
echo '$'.$reg[0].' = mysql_real_escape_string($_REQUEST[\''.$reg[0].'\']);';
echo "\n";   
}
?>

        include "./plugins/<?php echo $tabla;  ?>/modelos/editar.php"; 
        include "./plugins/<?php echo $tabla;  ?>/vista/editar.php"; 
    }else{
             $id 		= mysql_real_escape_string($_REQUEST['id']);     
            include "./plugins/<?php echo $tabla;  ?>/modelos/ver.php";
            include "./plugins/<?php echo $tabla;  ?>/reg/reg.php";
            include "./plugins/<?php echo $tabla;  ?>/vista/editar.php";

    } 
       
} else {
    permisos_sin_permiso('editar', '<?php echo $tabla;  ?>', $u_id_usuario);
}


</textarea>
