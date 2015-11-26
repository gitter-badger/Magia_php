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
    include '../magia/reg/reg.php';
    include '../magia/vista/get.php';
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


