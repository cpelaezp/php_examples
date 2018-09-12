<?php 
    include 'library.php';
?>

<html>
 <head>
  <title>Punto 7</title>
 </head>
 <body>
    <p> <a href="index.php">Index</a </p>
    <p> 
        7. Una compañía aseguradora de autos, requiere realizar el registro de los usuarios, por lo tanto, entre sus datos se solicita la cuenta de correo obligatorio para manejar la información vía Email. Se solicita que el dato de correo electrónico se valide de acuerdo a la sintaxis de un correo el cual debe tener presentes los caracteres “@” y “.”
    </p>
    
    <?php
        $val_mail="";
        $post="0";
        $id=""; 
        $nombres=""; 
        $apellidos=""; 
        $mail=""; 

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $post="1"; 

            $id=$_POST["id"]; 
            $nombres=$_POST["nombres"]; 
            $apellidos=$_POST["apellidos"]; 
            $mail=$_POST["mail"]; 

            // check if e-mail address is well-formed
            if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $val_mail = "Invalid email format";
            }
        }
    ?>

    <form action="7.php" method="post">
        <table>
            <tr>
                <td>Identificación</td> 
                <td><?php echo "<input type='text' name='id' value='$id'/>" ?> </td>
            </tr>
            <tr>
                <td>Nombres</td> 
                <td><?php echo "<input type='text' name='nombres' value='$nombres'/>" ?></td>
            </tr>
            <tr>
                <td>Apellidos</td> 
                <td><?php echo "<input type='text' name='apellidos' value='$apellidos'/>" ?></td>
            </tr>
            <tr>
                <td>E-Mail</td> 
                <td>
                    <?php echo "<input type='text' name='mail'  value='$mail'/>" ?>
                </td>
                <td>
                    <?php 
                        if(strlen($val_mail) > 0) {
                            echo "<p class='error'>$val_mail</p>";
                        } 
                    ?>
                </td>
            </tr>
            
        </table>
        <p> <input type="submit" /></p>
    </form>
 </body>
</html>



