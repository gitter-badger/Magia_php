<h1 class="page-header">
    <span class="glyphicon glyphicon-user"></span> <a href="?p=magia">Tablas</a> : <?php echo "$tabla"; ?>
        
</h1>


<div class="table-responsive"> 		  
<table class="table table-striped table-hover">
<thead>
    <tr>               

        
    </tr>
</thead>
<tbody>
<tr>
<?php 

echo "$tabla"; 
$i = 0;


foreach($valores as $val ) {
include "../magia/reg/reg.php";    
    echo '<th>'.$i.'</th>
    ';
    $i++;
}
?>
</tr>
</tbody>
</table>
</div>





<?php 
/*
<textarea class="form-control" rows="20">
<div class="table-responsive"> 		  
<table class="table table-striped table-hover">
<thead>
    <tr>               
<?php 
foreach($resultado as $reg ) {
include "../magia/reg/reg.php";    
    echo '<th>'.$mayusculas_pri_let_cad_pal.'</th>
    ';
}
?>
    </tr>
</thead>
<tbody>
<tr>
<?php 
include "../magia/modelos/tabla_valores.php";
foreach($valores as $val ) {
    echo "-"; 
    echo '<td>$reg['.$val[0].']</td>
    ';
}
?>
</tr>
</tbody>
</table>
</div>    
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
<br><br><br><br><br><br><br><br><br><br>*/
?>