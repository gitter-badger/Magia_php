<?php include 'header.php'; ?>






<h1>si</h1>

(0.01, .0.02, 0.03)

<p>Descripcion</p>


<pre>string si ( string $string )</pre>




<h2>Parametros</h2><hr>


<table class="table table-striped">
    <thead>
        <tr>
            <th>Par1</th>
            <th>Descripcion</th>

        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td>T</td>
            <td>Para tabla</td>
        </tr>
        <tr>
            <td>T</td>
            <td>Para tabla</td>
        </tr>
        <tr>
            <td>T</td>
            <td>Para tabla</td>
        </tr>
        <tr>
            <td>T</td>
            <td>Para tabla</td>
        </tr>
        <tr>
            <td>T</td>
            <td>Para tabla</td>
        </tr>
        <tr>
            <td>T</td>
            <td>Para tabla</td>
        </tr>
    </tbody>
</table>





<h2>Valores devueltos</h2>


<pre>Returns zero on success, or FALSE on error.

If the call was interrupted by a signal, sleep() returns a non-zero value. On Windows, this value will always be 192 (the value of the WAIT_IO_COMPLETION constant within the Windows API). On other platforms, the return value will be the number of seconds left to sleep.
</pre>


<h2>Errors/Exceptions</h2>


If the specified number of seconds is negative, this function will generate a E_WARNING.

<h2>Cambios</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Version</th>
            <th>Descripcion</th>

        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td>0.02</td>
            <td>Es la descrip</td>
        </tr>
    </tbody>
</table>





<h2>Ejemplos</h2>






<h3>Ver tambien </h3>

<ul>
    <li>sino() - una pequena descripcion de lo que hace</li>
    <li>elejir() - una pequena descripcion de lo que hace</li>
    <li>repetir() - una pequena descripcion de lo que hace</li>
</ul>





<h3>Contribuciones de usuario</h3>
This may seem obvious, but I thought I would save someone from something that just confused me: you cannot use sleep() to sleep for fractions of a second. This:

<?php sleep(0.25) ?>

will not work as expected. The 0.25 is cast to an integer, so this is equivalent to sleep(0). To sleep for a quarter of a second, use:

<?php usleep(250000) ?>














<?php include 'footer.php'; ?>