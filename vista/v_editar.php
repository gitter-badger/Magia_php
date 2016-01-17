

<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/vista/editar.php

</h1>






<h1><?php echo strtoupper($tabla); ?></h1>


<form class="form-horizontal" method="" action="">
<?php
foreach ($resultado as $reg) {
    include '../magia/reg/reg.php';
    include '../magia/vista/input_edit.php';
}
?>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>    
</form>

<hr>



<h2>Codigo del formulario:</h2>

<textarea rows="20" class="form-control">
    <form class="form-horizontal" method="" action="">
    <?php
    $i = 0; 
    foreach ($resultado as $reg) {
        include '../magia/reg/reg.php';
        if($i == 0){
            echo '<input type="hidden" name="id_usuario" value="&lt;?php echo $'.$reg[0].'; ?&gt;">';
            echo "\n\n"; 
        }
        
        include '../magia/vista/input_edit.php';
    }
    ?>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Edit</button>
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