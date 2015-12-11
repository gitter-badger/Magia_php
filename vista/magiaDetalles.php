

<h1 class="page-header">
</span> <a href="?p=magia">Tablas</a> : <?php echo "$tabla"; ?>

</h1>




<?php
/*
<h2>Cambiar opciones</h2>
 * 
 * 
 * $form_tipo = '<select class="form-control">
    <option value="text">Texto</option>
    <option value="number">Numeros (number)</option>
</select>
';








$form_label = '<input class="form-control" type="text" value="" name="" placeholder="">';
$form_type = '<input class="form-control" type="text" value="" name="" placeholder="">';
$form_class = '<input class="form-control" type="text" value="" name="" placeholder="">';
$form_name = '<input class="form-control" type="text" value="" name="" placeholder="">';
$form_id = '<input class="form-control" type="text" value="" name="" placeholder="">';
$form_placeholder = '<input class="form-control" type="text" value="" name="" placeholder="">';
?>




<div class="table-responsive"> 		  
    <table class="table table-striped table-hover">
        <thead>
            <tr>

                <th></span> Label</th>
                <th></span> Placeholder</th>
                <th></span> type</th>
                <th></span> class</th>
                <th></span> name</th>
                <th></span> Id</th>                
                <th></span> Visible</th>
                <th></span> Activo</th>
            </tr>
        </thead>
        <tbody>
<?php
foreach ($resultado as $reg) {
    include '../magia/reg/reg.php';
    echo '<tr>        
                    
                    <td><input class="form-control" type="text" value="' . $mayusculas_pri_let_de_frase . '" name="" placeholder=""></td>
                    <td><input class="form-control" type="text" value="' . $mayusculas_pri_let_de_frase . '" name="" placeholder=""></td>
                    <td>' . $form_tipo . '</td>
                    <td><input class="form-control" type="text" value="form-control" name="" placeholder=""></td>
                    <td><input class="form-control" type="text" value="' . $reg[0] . '" name="" placeholder=""></td>
                    <td><input class="form-control" type="text" value="' . $reg[0] . '" name="" placeholder=""></td>
                    
                    <td><input type="checkbox" value="1" name="" checked></td>
                    <td><input type="checkbox" value="1" name="" checked></td>
                    
                </tr>';
}
?>

        <td><input class="form-control" type="text" value="" name="" placeholder="Campo extra"></td>
        <td><input class="form-control" type="text" value="" name="" placeholder="Alguna cosa"></td>
        <td><input class="form-control" type="text" value="" name="" placeholder=""></td>
        <td><input class="form-control" type="text" value="" name="" placeholder="form-control"></td>
        <td><input class="form-control" type="text" value="" name="" placeholder="Nombre"></td>
        <td><input class="form-control" type="text" value="" name="" placeholder="Nombre"></td>
        <td><input type="checkbox" value="1" name="" ></td>
        <td><input type="checkbox" value="1" name="" ></td>



        </tbody>
    </table>
</div>



*/ ?>





<h1><?php echo strtoupper($tabla); ?></h1>


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