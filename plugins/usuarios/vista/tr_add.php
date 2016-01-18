
<?php
$borrar = (permisos_tiene_permiso('borrar', 'grupos', $u_grupo))? '<a class="btn btn-danger" href="index.php?p=grupos&c=editar&id_grupo='.$id_grupo.'">Borrar</a>':"";
echo ' <tr>
<td>'.$id_grupos.'</td>
<td><input class="form-control" type="text" name="grupo" value='.$grupo.'></td>                        			                        		                        
<td>
    <a class="btn btn-primary" href="index.php?p=grupos&c=borrar&id_grupo='.$id_grupos.'">Registrar</a>    
    '.$borrar.'       
</td></tr>'; 




