<?php 
include "header.php";
?>



<div class="table-responsive"> 		  
<table class="table table-striped table-hover">
            <thead>
                <tr>                    
                    <th><span class="glyphicon glyphicon-user"></span> Contacto</th>
                    <th><span class="glyphicon glyphicon-user"></span> Fecha</th>
                    <th><span class="glyphicon glyphicon-list-alt"></span> Hora</th>
                    <th><span class="glyphicon glyphicon-home"></span> Nota</th>
                    <th><span class="glyphicon glyphicon-map-marker"></span> Estatus</th>
                </tr>
            </thead>
            <tbody>
<?php 
foreach($resultado as $reg ) {
    
    
   // include "agenda/reg/reg.php";
    
    echo "<tr>"
            . "<td>$reg[0]</td>"
            . "<td>$fecha</td>"
            . "<td>$hora</td>"
            . "<td>$nota</td>"
            . "<td>$estatus</td>"
        . "</tr>";
}
?>
</tbody>
</table>
</div>

















