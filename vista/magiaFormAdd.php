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

<h1><?php echo strtoupper($tabla); ?></h1>


<form class="form-horizontal">
<?php 
foreach($resultado as $reg ) {
    include '../magia/reg/reg.php';
    include '../magia/vista/input_add.php';
}
?>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Rgistrar</button>
    </div>
  </div>    
</form>

<hr>





<textarea rows="20" class="form-control">
    <form class="form-horizontal">
<?php 
foreach($resultado as $reg ) {
    include '../magia/reg/reg.php';
    include '../magia/vista/input_add.php';
}
?>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Rgistrar</button>
    </div>
  </div>    
</form>

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