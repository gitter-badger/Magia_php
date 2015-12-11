<h1 class="page-header">
    <span class="glyphicon glyphicon-user"></span> <a href="?p=magia">Tablas</a> : <?php echo "$tabla"; ?>
        
</h1>


<?php 
/*<div class="table-responsive"> 		  
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


*/
?>







&lt;?php<br>

$sql = "INSERT INTO <?php echo "$tabla";  ?> (
<?php 
foreach($resultado as $reg ) {
    echo "$reg[0]"; 
    echo ",";
}
?>
) VALUES (
<?php 
foreach($resultado as $reg ) {
    echo ":$reg[0]"; 
    echo ",";
}
?>
)";
$stmt = $dbh-&gt;prepare($sql);<br>
$stmt-&gt;execute(array(<br>

<?php 
foreach($resultado as $reg ) {
    echo '":'.$reg[0].'"=&gt;"$'.$reg[0].'" ,'; 
    echo "<br>";
}
?>
)<br>
);<br>
$mensaje = "Realizado con exito";<br>
<br>
?&gt;<br>


<hr>
No olvidar la ultima coma, <bR>

delete the las ',' make error











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


