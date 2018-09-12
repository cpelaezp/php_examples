<?php 
    include 'library.php';
?>

<html>
 <head>
  <title>Punto 6</title>
 </head>
 <body>
    <p> <a href="index.php">Index</a </p>
    <p> 
        6. Un profesor de matemáticas desea mostrar a sus alumnos un método rápido para realizar le solicita realizar una aplicación web que permita sumar todos los números enteros pares que hay entre 1 y 1000. 
    </p>
    

    <?php
        $numero = (int)$_POST['numero'];
        $sum = 0;

        echo 'Resultados de números pares, hasta $numero: <br><br>';
        for($x = 0; $x <= $numero; $x++){
            if( $x % 2 === 0){
                $sum=$sum+$x;
                echo " $x : $sum <br>";
            }
        }
    ?>

    <p> <a href="javascript:history.back()" >Volver </a> </p>
 </body>
</html>