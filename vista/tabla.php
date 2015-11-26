<h1 class="page-header">
    <span class="glyphicon glyphicon-user"></span> <a href="?p=magia">Tablas</a> : <?php echo "$tabla"; ?>
        
</h1>


<div class="table-responsive"> 		  
<table class="table table-striped table-hover">
<thead>
    <tr>               
<?php 
foreach($resultado as $reg ) {
include "../magia/reg/reg.php";
    
    echo '
        <th>&lt;?php _t("$mayusculas_prilet_cad_pal"); ?&gt;</th>
    ';
}
?>
    </tr>
</thead>
<tbody>
<tr>
<?php 
foreach($resultado as $reg ) {
    echo "
        <td>$reg[0]</td>
    ";
}
?>
</tr>
</tbody>
</table>
</div>


<textarea class="form-control" rows="20">
<div class="table-responsive"> 		  
<table class="table table-striped table-hover">
<thead>
    <tr>               
<?php 
foreach($resultado as $reg ) {
include "../magia/reg/reg.php";
    
    echo '
        <th>&lt;?php _t("$mayusculas_pri_let_cad_pal"); ?&gt;</th>
    ';
}
?>
    </tr>
</thead>
<tbody>
<tr>
<?php 
foreach($resultado as $reg ) {
    echo "
        <td>$$reg[0]</td>
    ";
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
<br><br><br><br><br><br><br><br><br><br>