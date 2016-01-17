

<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/vista/detalles.php
</h1>








<h1><?php echo strtoupper($tabla); ?></h1>


<form class="form-horizontal" action="index.php" method="get">
    <input type="hidden" name="p" value="<?php echo $tabla; ?>">    
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="id_<?php echo $tabla?>" value="&lt?php echo $id_<?php echo $tabla; ?>?>">    
    
    
<?php
foreach ($resultado as $reg) {
    include '../magia/reg/reg.php';
    include '../magia/vista/input_detalles.php';
}
?>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>    
</form>

<hr>



<h2>Codigo:</h2>

<textarea rows="20" class="form-control">
<form class="form-horizontal" action="index.php" method="post">
    <input type="hidden" name="p" value="<?php echo $tabla; ?>">    
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="id_<?php echo $tabla?>" value="&lt?php echo $id_<?php echo $tabla; ?>?>">    
    
    
    <?php
    foreach ($resultado as $reg) {
        include '../magia/reg/reg.php';
        include '../magia/vista/input_detalles.php';
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