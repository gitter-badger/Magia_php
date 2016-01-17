<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/modelos/crear.php
</h1>


<textarea class="form-control" rows="50">
&lt;?php
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
$stmt = $dbh-&gt;prepare($sql);
$stmt-&gt;execute(array(
<?php 
foreach($resultado as $reg ) {
    echo '":'.$reg[0].'"=&gt;"$'.$reg[0].'", 
            '; 
    
}
?>
)
);
$mensaje = "Realizado con exito";
?&gt;



No olvidar la ultima coma,




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


