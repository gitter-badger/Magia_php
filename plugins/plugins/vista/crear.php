<ul class="nav nav-tabs">
    <li role="presentation"><a href="index.php?p=plugins&c=index">Instalados</a></li>
  <li role="presentation"><a href="#">Buscar</a></li>
  <li role="presentation" class="active"><a href="index.php?p=plugins&c=crear">Crear</a></li>
</ul>


<h2>Crear un plugin</h2>

<form class="form-inline" action="index.php" method="get">
    <input type="hidden" name="p" value="plugins">    
    <input type="hidden" name="c" value="crear">    
    <input type="hidden" name="a" value="verificar">    
  <div class="form-group">
    <label class="sr-only" for="nombre">Nombre del plugin</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
  </div>
  <button type="submit" class="btn btn-primary">Verificar</button>
</form>



<?php 
$a = $_GET['a'];
if($a=='verificar'){
    echo "verificar"; 
}
?>

<table border>
    <thead>
        <tr>
            <th>controlador</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td>11</td>
            <td>borrar.php</td>
            <td>ok</td>
            <td>ya existe</td>
            <td>Borrar</td>
        </tr>
        <tr>
            <td>11</td>
            <td>borrar.php</td>
            <td>ok</td>
            <td>ya existe</td>
            <td>Borrar</td>
        </tr>
        <tr>
            <td>11</td>
            <td>borrar.php</td>
            <td>ok</td>
            <td>ya existe</td>
            <td>Borrar</td>
        </tr>
        <tr>
            <td>11</td>
            <td>borrar.php</td>
            <td>ok</td>
            <td>ya existe</td>
            <td>Borrar</td>
        </tr>
        <tr>
            <td>11</td>
            <td>borrar.php</td>
            <td>ok</td>
            <td>ya existe</td>
            <td>Borrar</td>
        </tr>
        <tr>
            <td>11</td>
            <td>borrar.php</td>
            <td>ok</td>
            <td>ya existe</td>
            <td>Borrar</td>
        </tr>
        <tr>
            <td>11</td>
            <td>borrar.php</td>
            <td>ok</td>
            <td>ya existe</td>
            <td>Borrar</td>
        </tr>
       
    </tbody>
</table>


