
<?php
$borrar = (permisos_tiene_permiso('borrar', 'grupos', $u_grupo))?'<a class="btn btn-danger" href="index.php?p=grupos&c=index&a=borrar&id_grupo='.$id_grupo.'">Borrar</a>':'';
?>

<form method="post" action="index.php" >
    <input type="hidden" name="p" value="grupos">
    <input type="hidden" name="c" value="index">    
    <input type="hidden" name="a" value="editar">
    <input type="hidden" name="id_grupo" value="<?php echo $id_grupo; ?>">        
    <tr>
        
        <td><input class="form-control" type="text" name="id_grupo" value="<?php echo $id_grupo; ?>" placeholder=""></td>
            <td><input class="form-control" type="text" name="grupo" value="<?php echo $grupo; ?>" placeholder=""></td>
                    <td><input class="btn btn-primary" type="submit" value="Registrar" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 




