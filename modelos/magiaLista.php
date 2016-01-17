<?php	
//$tabla = mysql_real_escape_string($_REQUEST['tabla']);



            $sql        = "SELECT * FROM $tabla";
            $stmt       = $dbh->prepare($sql);
            $stmt->execute(array(           
                ":tabla"=>"$tabla"
                )
            );        
            $resultado = $stmt->fetchAll();
?>  