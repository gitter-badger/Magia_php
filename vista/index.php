<h1 class="page-header">Base de datos: <?php echo "$bdatos"; ?> 
    <a href="index.php"><span class="glyphicon glyphicon-refresh"></span></a>
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
        <a href=\"home.php?p=magiaTabla&tabla=$reg[0]\">Table Translate</a><br>
            <a href=\"home.php?p=magiaTabla2&tabla=$reg[0]\">Tabla not translate</a>
        </td>
        <td><a href=\"home.php?p=magiaDetalles&tabla=$reg[0]\">Details ---</a></td>
        <td><a href=\"home.php?p=magiaFormAdd&tabla=$reg[0]\">Form</a><br>
            <a href=\"home.php?p=magiaInserInto&tabla=$reg[0]\">Insert</a>
                </td>    
        <td><a href=\"home.php?p=magiaFormEdit&tabla=$reg[0]\">Form</a><br>
            <a href=\"home.php?p=magiaUpdate&tabla=$reg[0]\">Update</a>
                </td>
            
        <td>
            <a href=\"home.php?p=magiaDeleteBoton&tabla=$reg[0]\">Boton</a><br>
            <a href=\"home.php?p=magiaDelete&tabla=$reg[0]\">Delete</a>
        </td>
        <td><a href=\"home.php?p=magiaReg&tabla=$reg[0]\">reg[xxx]</a></td>
        <td><a href=\"home.php?p=magiaGET&tabla=$reg[0]\">Get</a><br>
            <a href=\"home.php?p=magiaPost&tabla=$reg[0]\">Post</a><br>
            <a href=\"home.php?p=magiaGET&tabla=$reg[0]\">Resuest</a>
        </td>
        
        
    </tr>";
    $i++;
}
?>
</tbody>
</table>
</div>
