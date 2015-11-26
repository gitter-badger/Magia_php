<h1 class="page-header">
    <span class="glyphicon glyphicon-user"></span> <a href="?p=magia">Tablas</a> : <?php echo "$tabla"; ?>
        
</h1>


<div class="table-responsive"> 		  
<table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th><span class="glyphicon glyphicon-user"></span> Tabla</th>
                </tr>
            </thead>
            <tbody>
<?php 
foreach($resultado as $reg ) {
    echo "<tr>        
        <td>$reg[0]</td>
    </tr>";
}
?>
</tbody>
</table>
</div>







<textarea class="form-control" rows="20">
<?php 
foreach($resultado as $reg ) {
    $min = strtolower($reg[0]); // la cadena a minusculas
    $MAY = strtoupper($reg[0]); // string en mayusculas
    $May = ucfirst($reg[0]); // el primero de la frase
    $Mcp = ucwords($reg[0]); // El primero de cada palabra
    $Mlf = mb_strtoupper($reg[0]);
    $tipo_campo = $reg[1];
    
    echo '$'.$reg[0].' = mysql_real_escape_string($_POST[\''.$reg[0].'\']);';
    echo "\n";
    
    
}
?>
</textarea>




<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>


