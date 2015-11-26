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


<hr>

<div class="row">
   
    
    
    
    <div class="col-lg-6">        
        <textarea class="form-control" rows="20">
<?php 
            foreach($resultado as $reg ) {
                include '../magia/reg/reg.php';
                include '../magia/vista/reg.php';
            }
            ?></textarea>
        
    </div>
</div>

<hr>






<hr>









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


