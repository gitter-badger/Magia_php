<?php 
include './admin/funciones.php';
include './admin/permisos.php';
$u_grupo = "administradores";
$u_id_usuario = "1";  
?>

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


$a = (isset($_GET['a'])) ? "$_GET[a]" : '';
$p = (isset($_GET['p'])) ? "$_GET[p]" : 'index';
$c = (isset($_GET['c'])) ? "$_GET[c]" : 'index';

if($a=='configBd'){include "./request/updateDb.php"; }



?>
            
            <div class="row">
                <div class="col-lg-0">
                </div>  
                <div class="col-lg-12">                    
                    <?php 
                        include './plugins/'.$p.'/controlador/'.$c.'.php';
                    ?>
                </div>   
            </div>  
            
            
            
            

        

            </div>            
        
        
        
    </body>
</html>









