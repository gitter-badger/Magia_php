<?php
$sql = "INSERT INTO grupos (
grupo
) VALUES (
:grupo)";
$stmt = $dbh->prepare($sql);
$stmt->execute(array( 
            ":grupo"=>"$grupo" 
            )
);
$mensaje = "Realizado con exito";
?>




