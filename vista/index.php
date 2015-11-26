<h1 class="page-header">
    <span class="glyphicon glyphicon-user"></span> Tablas 
</h1>



<div class="table-responsive"> 		  
<table class="table table-striped table-hover" width="100%">
            <thead>
                <tr>
                    <th> #</th>
                    <th> Tabla</th>
                    <th> Pagina</th>
                    
                    <th> Todos</th>
                    <th> Ver</th>
                    <th> Crear</th>
                    
                    <th> Editar </th>
                    <th> Borrar</th>
                    <th> Datos</th>
                    <th> Datos</th>





                </tr>
            </thead>
            <tbody>
<?php
$i = 1; 
foreach($resultado as $reg ) {
    
    echo "<tr>        
        <td>$i</td>
        <td>$reg[0]</td>
        <td>
            <a href=\"?p=magiaLista&tabla=$reg[0]\">$reg[0].php</a>
        </td>
        <td>
        <a href=\"?p=magiaTabla&tabla=$reg[0]\">Tabla Tranlate</a><br>
            <a href=\"?p=magiaTabla2&tabla=$reg[0]\">Tabla sin translate</a>
        </td>
        <td><a href=\"?p=magiaFormAdd&tabla=$reg[0]\">Detalles</a></td>
        <td><a href=\"?p=magiaFormAdd&tabla=$reg[0]\">Form</a><br>
            <a href=\"?p=magiaInserInto&tabla=$reg[0]\">Insert</a>
                </td>    
        <td><a href=\"?p=magiaFormEdit&tabla=$reg[0]\">Form</a><br>
            <a href=\"?p=magiaUpdate&tabla=$reg[0]\">Update</a>
                </td>
            

        <td><a href=\"?p=magiaInserInto&tabla=$reg[0]\">Request</a></td>
        <td><a href=\"?p=magiaReg&tabla=$reg[0]\">registro</a></td>
        <td><a href=\"?p=magiaGET&tabla=$reg[0]\">Get</a><br>
            <a href=\"?p=magiaPost&tabla=$reg[0]\">Post</a><br>
            <a href=\"?p=magiaGET&tabla=$reg[0]\">Resuest</a>
        </td>


        
        
    </tr>";
    $i++;
}
?>
</tbody>
</table>
</div>


