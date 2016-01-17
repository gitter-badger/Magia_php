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


?>

            
<?php            
switch ($p) {
        
// configBd         
    case "configBd":
        include "modelos/configBd.php";
        include "vista/configBd.php";        
        break; 
    
    
    
    default :
       // include "modelos/index.php";
       // include "vista/index.php";
        break;
}
?>        
           
            
            
            
            
            <div class="row">
                <div class="col-lg-3">
                    
                    
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                          Bienvenido
                        </a>
                        <a href="?p=crea" class="list-group-item">1. Crea tu base de datos</a>
                        <a href="?p=configura" class="list-group-item">2. configura la coneccion</a>
                        <a href="?p=plugin" class="list-group-item">3. Crea el pluging</a>
                        <a href="?p=disfruta" class="list-group-item">Empezar a disfrutar</a>

                      </div>
                    
                    
                </div>  

                <div class="col-lg-8">                    
                    <?php 
                    $p = $_GET['p'];
                    
                        include $p.'.php';
                    ?>
                </div>   
            </div>  
            
            
            
            

        

            </div>            
        
        
        
    </body>
</html>









