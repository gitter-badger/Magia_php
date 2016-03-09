 <?php  
    echo ' <tr> <td>'.$id.'</td> 
 <td>'.$nombre.'</td> 
 <td>'.$apellidos.'</td> 
 <td>'.$email.'</td> 
 <td>
                    <a href='.$_SERVER['PHP_SELF'].'?p=autores&c=ver&id='.$id.'>Ver</a> |  
                    <a href='.$_SERVER['PHP_SELF'].'?p=autores&c=editar&id='.$id.'>Editar</a>  
                      
                </td></tr>';  