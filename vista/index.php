<h1 class="page-header">
    <span class="glyphicon glyphicon-user"></span> Tables 
</h1>



















































<div class="table-responsive"> 		  
<table class="table table-striped table-hover" width="100%">
            <thead>
                <tr>
                    <th> #</th>
                    <th> Table</th>
                    
                    
                    <th> All</th>
                    <th> Ver</th>
                    <th> New</th>
                    
                    <th> Edit </th>
                    <th> Delete</th>
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
        <a href=\"?p=magiaTabla&tabla=$reg[0]\">Table Translate</a><br>
            <a href=\"?p=magiaTabla2&tabla=$reg[0]\">Tabla not translate</a>
        </td>
        <td><a href=\"?p=magiaDetalles&tabla=$reg[0]\">Details ---</a></td>
        <td><a href=\"?p=magiaFormAdd&tabla=$reg[0]\">Form</a><br>
            <a href=\"?p=magiaInserInto&tabla=$reg[0]\">Insert</a>
                </td>    
        <td><a href=\"?p=magiaFormEdit&tabla=$reg[0]\">Form</a><br>
            <a href=\"?p=magiaUpdate&tabla=$reg[0]\">Update</a>
                </td>
            

        <td><a href=\"?p=magiaInserInto&tabla=$reg[0]\">Request</a></td>
        <td><a href=\"?p=magiaReg&tabla=$reg[0]\">reg[xxx]</a></td>
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


