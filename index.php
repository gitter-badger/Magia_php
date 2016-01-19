<?php 
include 'bd.php';
include "conec.php";
include './admin/coneccion.php';
include './admin/funciones.php';
include './admin/permisos.php';
$u_grupo = "administradores";
$u_id_usuario = "1";  

$a = (isset($_REQUEST['a'])) ? "$_REQUEST[a]" : '';
$p = (isset($_REQUEST['p'])) ? "$_REQUEST[p]" : '';
$c = (isset($_REQUEST['c'])) ? "$_REQUEST[c]" : 'index';

?>

<html>
    <head>
        
        
        
        
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>




    </head>

    <body>
        <div class="container">
<?php 
include "vista/header.php";
?>            

              
<?php 
//if($a=='configBd'){include "./request/updateDb.php"; }
?>
            
            <div class="row">
                <div class="col-lg-0">
                </div>  
                <div class="col-lg-12">                    
                    <?php 
                    
                    if($p){
                        include './plugins/'.$p.'/controlador/'.$c.'.php';
                    }else{
                        //include './plugins/'.$p.'/controlador/'.$c.'.php';
                    }
                        
                    ?>
                </div>   
            </div>  

            </div>  
        
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    
    </body>
</html>









