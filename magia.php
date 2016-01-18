    <?php 
    function _t($p){
        return$p;
    }
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

if(isset($_REQUEST['tabla']))
{
    
    $tabla = mysql_real_escape_string($_REQUEST['tabla']);
}
else
{
    $p = "";
}








?>
            
            <div class="row">
                <div class="col-lg-3">
                    <?php 
                    
                    if(isset($tabla)){
                    include "menu.php";     
                    }
                    
                    ?>                  
                    
                </div>
                <div class="col-lg-9">
            
<?php            
switch ($p) {
        
        
// borrar         
    case "c_borrar":
        include "modelos/v_detalles.php";
        include "vista/c_borrar.php";        
        break; 
// c_buscar         
    case "c_buscar":
        include "modelos/v_detalles.php";
        include "vista/c_buscar.php";        
        break; 
        
// c_crear         
    case "c_crear":
        include "modelos/v_detalles.php";
        include "vista/c_crear.php";        
        break; 
        
// c_detalles         
    case "c_detalles":
        include "modelos/v_detalles.php";
        include "vista/c_detalles.php";        
        break; 
        
// c_editar         
    case "c_editar":
        include "modelos/v_detalles.php";
        include "vista/c_editar.php";        
        break; 
        
// c_index         
    case "c_index":
        include "modelos/c_index.php";
        include "vista/c_index.php";        
        break; 
    
    
    
// d_get         
    case "d_get":
        include "modelos/v_detalles.php";
        include "vista/d_get.php";        
        break;    
    
// d_post         
    case "d_post":
        include "modelos/v_detalles.php";
        include "vista/d_post.php";        
        break;    
    
// d_request         
    case "d_request":
        include "modelos/v_detalles.php";
        include "vista/d_request.php";        
        break;        
    
    
    
// m_borrar         
    case "m_borrar":
        include "modelos/v_detalles.php";
        include "vista/m_borrar.php";        
        break;    
// m_buscar         
    case "m_buscar":
        include "modelos/v_detalles.php";
        include "vista/m_buscar.php";        
        break;   
// m_crear         
    case "m_crear":
        include "modelos/v_detalles.php";
        include "vista/m_crear.php";        
        break;   
        
        
// m_editar         
    case "m_editar":
        include "modelos/v_detalles.php";
        include "vista/m_editar.php";        
        break;   
    
// m_index         
    case "m_index":
        //include "modelos/m_index.php";
        include "vista/m_index.php";        
        break;   
        
        
// m_ver         
    case "m_ver":
        include "modelos/v_detalles.php";
        include "vista/m_ver.php";        
        break;   
        
    
    
            
        
// r_registros         
    case "r_registros":
        include "modelos/v_detalles.php";
        include "vista/r_registros.php";        
        break;   
    
    
    
    
    
    
    
    
// v_crear         
    case "v_crear":
        include "modelos/v_crear.php";
        include "vista/v_crear.php";        
        break;   
// v_detalles         
    case "v_detalles":
        include "modelos/v_detalles.php";
        include "vista/v_detalles.php";        
        break;   
// Detalles1         
    case "v_detalles1":
        include "modelos/v_detalles.php";
        include "vista/v_detalles1.php";        
        break;   
        
// v_editar         
    case "v_editar":
        include "modelos/v_editar.php";
        include "vista/v_editar.php";        
        break;   
        
// v_index         
    case "v_index":
        include "modelos/v_detalles.php";
        include "vista/v_index.php";        
        break; 
    
// v_borrar         
    case "v_borrar":
        //include "modelos/v_borrar.php";
        include "vista/v_borrar.php";        
        break;   
    
    
// v_tr         
    case "v_tr":
        include "modelos/v_detalles.php";
        include "vista/v_tr.php";        
        break;   
    
// v_tr_anadir         
    case "v_tr_anadir":
        include "modelos/v_detalles.php";
        include "vista/v_tr_anadir.php";        
        break;   
    
// v_tr_editar         
    case "v_tr_editar":
        include "modelos/v_detalles.php";
        include "vista/v_tr_editar.php";        
        break;   
    
    
    
    
    
    
        default :
        include "modelos/index.php";
        include "vista/index.php";
        break;
}
?>        
            
            
             </div>
        
</div>
            </div>            
        
        
        
    </body>
</html>









