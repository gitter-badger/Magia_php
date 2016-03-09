 <?php  
    echo ' <tr> <td>'.$id.'</td> 
 <td>'.$titulo.'</td> 
 <td>'.$contenido.'</td> 
 <td>'.$id_autor.'</td> 
 <td>'.$fecha.'</td> 
 <td>'.$estatus.'</td> 
 <td>
                    <a href='.$_SERVER['PHP_SELF'].'?p=articulos&c=ver&id='.$id.'>Ver</a> |  
                    <a href='.$_SERVER['PHP_SELF'].'?p=articulos&c=editar&id='.$id.'>Editar</a>  
                      
                </td></tr>';  