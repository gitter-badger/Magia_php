

<h1 class="page-header">
</span> <a href="?p=magia">/</a><?php echo "$tabla"; ?>/vista/detalles.php
</h1>








<h1><?php echo strtoupper($tabla); ?></h1>


<table border>
    <thead>
        <tr>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
        </tr>
    </thead>
    
    
    <tbody>
        <?php
        foreach ($resultado as $reg) {
            include '../magia/reg/reg.php';
            include '../magia/vista/input_detalles1.php';
        }
        ?>
    </tbody>
    
    
    
</table>

<form class="form-horizontal" action="" method="">

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>    
</form>

<hr>



<h2>Codigo:</h2>

<textarea rows="20" class="form-control">
    <form class="form-horizontal" action="" method="">
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