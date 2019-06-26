<?php
$conn = mysqli_connect('bigdeli.mx', 'atomstud_sergio', 'bigdeli123', 'atomstud_pos');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$bandera = $_POST['true'];     

if($bandera == true){
    
    $consulta = "UPDATE stock SET stock = 0 ";
    if ($conn->query($consulta) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $consulta . "<br>" . $conn->error;
    }
    $consulta2 = "UPDATE productos SET stockInicio = 0 ";
    if ($conn->query($consulta2) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $consulta2 . "<br>" . $conn->error;
    }

}

?>