 <?php  
$borrar = (permisos_tiene_permiso("borrar", "parametros", $u_grupo))?'<a class="btn btn-danger" href="index.php?p=parametros&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>

<form method="post" action="index.php" >
    <input type="hidden" name="p" value="extructura">
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="a" value="editar">    
    <input type="hidden" name="id" value="<?php echo $id; ?>">    
    <tr> <td><input class="form-control" type="text" name="id" value="<?php echo $id; ?>" placeholder=""></td> 
 <td><input class="form-control" type="text" name="funcion" value="<?php echo $funcion; ?>" placeholder=""></td> 
 <td><input class="form-control" type="text" name="parametro" value="<?php echo $parametro; ?>" placeholder=""></td> 
 <td><input class="form-control" type="text" name="descripcion" value="<?php echo $descripcion; ?>" placeholder=""></td> 
<td><input class="btn btn-primary" type="submit" value="Registrar" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 