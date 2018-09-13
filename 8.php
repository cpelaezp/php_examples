<?php 
    include 'library.php';

    class cliente{
        public $NIT = "";
        public $Nombre = "";
        public $Direccion = "";
        public $Ciudad = ""; 
        public $Teléfono = "";
        public $Contacto = "";
        public $email = "";

        public function __construct($_NIT, $_Nombre, $_Direccion, $_Ciudad, $_Telefono, $_Contacto, $_email){
            $this->NIT = $_NIT;
            $this->Nombre = $_Nombre;
            $this->Direccion = $_Direccion;
            $this->Ciudad = $_Ciudad; 
            $this->Telefono = $_Telefono;
            $this->Contacto = $_Contacto;
            $this->email = $_email;
        }
    }

    //declaración array
    $clientes=array();
    $clientes[] = new cliente("1234567891", "Cliente 1", "calle 12 34", "Bogotá", "123456", "Jose Becerrra", "jose@hca.com");
    $clientes[] = new cliente("1234567892", "Cliente 2", "calle 16 34", "Cali", "123456", "Jose Becerrra", "jose@hca.com");
    $clientes[] = new cliente("1234567893", "Cliente 3", "calle 13 34", "Cucuta", "123456", "Jose Becerrra", "jose@hca.com");
    
    function findCliente($array, $findKey=NULL, $findValue=NULL, $findValue2=NULL){
        $resultList = Array();
        
        echo "Busqueda: $findKey por $findValue <br>";
        echo "<table>";
        echo " <tr><td>NIT</td><td>Nombre</td><td>Dirección</td><td>CiudadNIT</td><td>Teléfono</td><td>Contacto</td><td>email</td></tr>";
        foreach ( $array as $element ) {
            $encontro=false;
            switch($findKey){
                case "NIT":
                    if(stristr($element->NIT, $findValue)) {
                        $encontro=true;
                    }
                    break;    
                case "Contacto":
                    if(stristr($element->Contacto, $findValue)) {
                        $encontro=true;
                    }
                    break;    
            }

            if ($encontro){
                echo " <tr><td>$element->NIT</td><td>$element->Nombre</td><td>$element->Direccion</td><td>$element->Ciudad</td><td>$element->Telefono</td><td>$element->Contacto</td><td>$element->email</td></tr>";
            }
        }
        echo "</table> <br>";
        
        return $resultList;
    }
?>

<html>
 <head>
  <title>Punto 7</title>
 </head>
 <body>
    <p> <a href="index.php">Index</a </p>
    <p> 
        8. La oficina “ACG Consultores” en su proceso para organizar los datos, requiere un directorio telefónico de sus clientes en donde se encuentren los siguientes datos: NIT, Nombre, Dirección, Ciudad, Teléfono, Nombre del contacto, e.mail, por medio de un array se debe generar una agenda que permita navegar en los datos para mejorar la búsqueda y organización de los clientes.
    </p>
    
    <?php
        $_findKey="";
        $_findValue="";
        $_findValue2="";

        $arr = array("NIT", "Contacto");
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $post="1"; 

            $_findKey=$_POST["findKey"]; 
            $_findValue=$_POST["findValue"]; 
            $_findValue2=$_POST["findValue2"]; 

            // busca
            $list = findCliente($clientes, $_findKey, $_findValue, $_findValue2);

            if (is_null($list)){
                echo "No se encontraron datos...";    
            } 
            
        }
    ?>

    <form action="8.php" method="post">
        <table>
            <tr>
                <td>Filtro</td> 
                <td>                    
                    <select name="findKey">
                    <?php foreach ($arr as $value => $text): ?>
                        <option  value="<?php echo $text; ?>" <?php if ($_findKey == $text) {echo 'selected';} ?>><?php echo $text; ?>
                        </option> 
                    <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Valor</td> 
                <td><?php echo "<input type='text' name='findValue' value='$_findValue'/>" ?></td>
            </tr>
            <tr>
                <td>Valor2</td> 
                <td><?php echo "<input type='text' name='findValue2' value='$_findValue2'/>" ?></td>
            </tr>
        </table>
        <p> <input type="submit" /></p>
    </form>
 </body>
</html>



