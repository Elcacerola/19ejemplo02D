<?php
include "programacion.php"
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="estilos.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" 
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p style="background: yellowgreen; font-size: 25px">Uno</p>
        <p class="estilo01">Dos</p>
        <p class="estilo02">Tres</p>
        
        <?php
        
        /* comentarios
         */
        $A=10;
        $a=10;
        $hello="hola mundo";
           
        echo "Saludo $hello";
        echo "<br>";
        echo "Saludo $hello x $A y $a";
        echo "<br>";
        echo 'Saludo' .$hello. ' x ' .$A. ' y ' .$a;
        
        $dia["lunes"]='Libre';
        $dia["martes"]='3 clases';
        $dia["miercoles"]='3 clases';
        $dia["jueves"]='1 clases';
        $dia["viernes"]='3 clases';
        echo "<br>";
        foreach ($dia as $value){
            echo $value. "<br>";
        }
        ?>
    </body>
</html>
