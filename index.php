<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa que comprueba expresiones regulares</title>
    </head>
    <body>
        <?php
        
        if (isset($_POST['enviar'])){
            $exp=filter_input(INPUT_POST,'exp');
            $exp2= "/^" . $exp . "$/";
            $cadena=filter_input(INPUT_POST,'cadena');
            if (preg_match($exp2,$cadena))
            echo "Contiene la expresión" . $exp2;
        else
            echo "No contiene la expresion". $exp2;
        }
       
        ?>
        <form method="POST" action="index.php">
            Cadena <input type="text" name="cadena" value="" /><br />
            Expresion <input type="text" name="exp" value="" /><br />
            <input type="submit" name="enviar" value="enviar"/>
        </form>
    </body>
    
</html>
