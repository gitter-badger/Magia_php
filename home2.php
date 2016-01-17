<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
    </head>

    <body>
        <div class="container">
            
       
            
        
            
<?php 

include "bd.php";
include "conec.php";
include "mande_coneccion.php";
include "vista/header.php";
$pagina = $_GET['p'];
$tabla = $_GET['tabla'];

?>
            
            
            

            
            <div class="row">
                <div class="col-lg-4"><hr>
                                
                <?php
                include 'menu.php';
                ?>
            
                    
                </div>
                <div class="col-lg-8"><hr>
                    
                    
Controller:                    
<textarea class="form-control" rows="15">
<?php 
include "home/$pagina.php"; 
?>
</textarea>

<br><br>






                    
                    
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
<?php             












if(isset($_REQUEST['a']))
{
    $a = $_REQUEST['a'];
} else {
    $a = "";
}




if($a=='configBd'){
    include "./request/updateDb.php"; 
}







if(isset($_REQUEST['p']))
{
    $p = $_REQUEST['p'];
}
else
{
    $p = "";
}






switch ($p) {
        
    case "magia":
        include "modelos/index.php";
        include "vista/index.php";
        break; 
// con traduccion         
    case "magiaTabla":
        include "modelos/tabla.php";
        include "vista/tabla.php";
        //echo "magiaTabla"; 
        break; 
    
// sin traduccion         
    case "magiaTabla2":
        include "modelos/tabla2.php";
        include "vista/tabla2.php";
        
        break;     
    
    
    
    
    case "magiaFormAdd":

        include "modelos/tabla.php";
        include "vista/magiaFormAdd.php";
        //echo "magiaTabla"; 

        break; 
    case "magiaFormEdit":

        include "modelos/tabla.php";
        include "vista/magiaFormEdit.php";
        //echo "magiaTabla"; 

        break; 
    case "magiaReg":

        include "modelos/tabla.php";
        include "vista/magiaReg.php";
        //echo "magiaTabla"; 

        break; 
    case "magiaGET":

        include "modelos/tabla.php";
        include "vista/magiaGET.php";
        //echo "magiaTabla"; 

        break; 
    case "magiaPost":

        include "modelos/tabla.php";
        include "vista/magiaPost.php";

        break; 
    case "magiaRequest":
        
        include "modelos/tabla.php";
        include "vista/magiaRequest.php";
        break; 
    case "magiaInserInto":
        include "modelos/tabla.php";
        include "vista/magiaInserInto.php";
        break; 
    case "magiaUpdate":
        include "modelos/tabla.php";
        include "vista/magiaUpdate.php";
        break; 
    
    case "magiaLista":
        include "modelos/magiaLista.php";
        include "vista/magiaLista.php";
        break; 
        
    case "citas":
        include "modelos/citas.php";
        include "vista/citas.php";
        break; 
    
    case "configBd":
        include "modelos/configBd.php";
        include "vista/configBd.php";
        break; 
        
        
    
    
    
        default :
        include "modelos/index.php";
        include "vista/index.php";
        break;
}
?>        
            
            
             </div>
        
        
    </body>
</html>









