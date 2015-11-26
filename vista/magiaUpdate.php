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
No olvidar la ultima coma, 



<hr>


$sql = "UPDATE <?php echo "$tabla"; ?> SET <br>
            <?php 
            foreach($resultado as $reg ) {
                echo "$reg[0]=:$reg[0],"; 
                echo "<br>";
            }
            ?> WHERE aaaaa=:aaaaaa AND bbbbbb=:bbbbbbb ";
            $stmt = $dbh->prepare($sql); <br>
            $stmt->execute(array(  <br>
            
            <?php 
            foreach($resultado as $reg ) {
                echo '":'.$reg[0].'"=>"$'.$reg[0].'",';  
                echo "<br>";
            }
            ?>
            
         
            ":xxxxxxxxxxxxx"=>"$xxxxxxxxxxxxxxxxxx"   <br>       
            )<br>
        ); 
    
            
  
            


        




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


