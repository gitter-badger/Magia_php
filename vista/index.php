<h1 class="page-header">Base de datos: <?php echo "$bdatos"; ?> 
    
</h1>

<p>Lista de tablas en la base de datos 
    <a href="home.php"><span class="glyphicon glyphicon-refresh"></span></a>
</p>

<div class="table-responsive"> 		  
<table class="table table-striped table-hover" width="100%">
            <thead>
                <tr>
                    <th> #</th>
                    <th> Table</th>
                    <th> Pluging de gestion</th>
                    <th> Version instlada / version actual</th>
                    <th> Accion</th>
                </tr>
            </thead>
            <tbody>
<?php
$i = 1; 
foreach($resultado as $reg ) {
    
    echo '<tr>        
        <td>'.$i.'</td>
        <td><a href="magia.php?tabla='.$reg[0].'&p=c_index">'.$reg[0].'</a></td>
        <td>Creado</td>
        <td>0.01 / 0.02</td>
        <td>Actualizar | <a href="index.php?p='.$reg[0].'">Gestion</a></td>
        
        
    </tr>';
    $i++;
}
?>
</tbody>
</table>
</div>
