<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/modelos/index.php
</h1>

SQL
<textarea class="form-control" rows="10">
&lt;?php 
$sql=mysql_query(
        "SELECT * FROM <?php echo "$tabla";  ?> ORDER BY id_<?php echo "$tabla";  ?> DESC   ",$conexion) or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
?></textarea>

PDO
<textarea class="form-control" rows="10">
&lt;?php
            $sql        = "SELECT FROM <?php echo "$tabla";  ?>";
            $stmt       = $dbh->prepare($sql);
            $stmt->execute(array(           
                ":id_<?php echo "$tabla";  ?>"=>"$id_<?php echo "$tabla";  ?>"
                )
            );        
            $resultado = $stmt->fetchAll();
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


