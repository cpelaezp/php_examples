<html>
 <head>
  <title>Punto 5</title>
 </head>
 <body>
    <p> 
        5. Una papelería requiere realizar un formulario que permita pedir una cantidad de cuadernos, cuyo precio variará según la cantidad pedida, teniendo en cuenta que se pide: 
        <lu>
            <li> CANTIDAD 	PRECIO UNITARIO 
            <li> Menos de 10 	$ 2.000 
            <li> Entre 10 y 30 	$ 1.800 
            <li> Más de 30 	$ 1.300 
        </lu>
    </p>

    <p> Resultado </p>

    <?php
        $cantidad=(int)$_POST['cantidad'];
        $valor=0;
        $precio=0;

        if ($cantidad < 10){
          $precio=2000;  
        } else{
            if ($cantidad <= 30){
                $precio=1800;  
            } else{
                $precio=1300;      
            }    
        } 

        $valor=$cantidad*1300;    
    ?>

    <p> Su solicitu es <?php echo $cantidad;?> a $ <?php echo $precio;?> valor $ <?php echo $valor;?>  </p>
    <p> <a href="javascript:history.back()" >Volver </a> </p>
 </body>
</html>



