

<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/modelos/borrar.php

</h1>



SQL
<textarea class="form-control" rows="15">
&lt;?php
$sql=mysql_query("
DELETE FROM 
<?php echo "$tabla";  ?> 
WHERE
id_<?php echo "$tabla"; ?> = '$id_<?php echo "$tabla"; ?>'
",$conexion) or die ("Error ".mysql_error());

$mensaje = "Realizado";
?&gt;

</textarea>

PDO

<textarea class="form-control" rows="15">
&lt;?php
$sql = "DELETE FROM <?php echo "$tabla";  ?> WHERE id_campo=:id_campo)"; $stmt = $dbh->prepare($sql);
$stmt->execute(array(
":id_campo"=>"$id_campo" 
)
);
$mensaje = "Realizado con exito";
?&gt;
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


