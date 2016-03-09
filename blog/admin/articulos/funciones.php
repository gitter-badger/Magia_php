<?php 
                function articulos_campo($id, $campo){
                    global $conexion; 
                $sql=mysql_query(
                        "SELECT $campo FROM articulos WHERE id = '$id'   ",$conexion) or die ("Error:".mysql_error());
                $reg = mysql_fetch_array($sql);
                return $reg[$campo];    
                }