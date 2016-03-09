 <?php  
$borrar = (permisos_tiene_permiso("borrar", "autores", $u_grupo))?'<a class="btn btn-danger" href="index.php?p=autores&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
    <input type="hidden" name="p" value="autores">
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="a" value="editar">    
    <input type="hidden" name="id" value="<?php echo $id; ?>">    
    <tr> <td><input class="form-control" type="text" name="id" value="<?php echo $id; ?>" placeholder="Id"></td> 
 <td><input class="form-control" type="text" name="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre"></td> 
 <td><input class="form-control" type="text" name="apellidos" value="<?php echo $apellidos; ?>" placeholder="Apellidos"></td> 
 <td><input class="form-control" type="text" name="email" value="<?php echo $email; ?>" placeholder="Email"></td> 
<td><input class="btn btn-primary" type="submit" value="Registrar" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 