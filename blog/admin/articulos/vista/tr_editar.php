 <?php  
$borrar = (permisos_tiene_permiso("borrar", "articulos", $u_grupo))?'<a class="btn btn-danger" href="index.php?p=articulos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
    <input type="hidden" name="p" value="articulos">
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="a" value="editar">    
    <input type="hidden" name="id" value="<?php echo $id; ?>">    
    <tr> <td><input class="form-control" type="text" name="id" value="<?php echo $id; ?>" placeholder="Id"></td> 
 <td><input class="form-control" type="text" name="titulo" value="<?php echo $titulo; ?>" placeholder="Titulo"></td> 
 <td><input class="form-control" type="text" name="contenido" value="<?php echo $contenido; ?>" placeholder="Contenido"></td> 
 <td><input class="form-control" type="text" name="id_autor" value="<?php echo $id_autor; ?>" placeholder="Id_autor"></td> 
 <td><input class="form-control" type="text" name="fecha" value="<?php echo $fecha; ?>" placeholder="Fecha"></td> 
 <td><input class="form-control" type="text" name="estatus" value="<?php echo $estatus; ?>" placeholder="Estatus"></td> 
<td><input class="btn btn-primary" type="submit" value="Registrar" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 