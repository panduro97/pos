<?php
$conn = mysqli_connect('bigdeli.mx', 'atomstud_sergio', 'bigdeli123', 'atomstud_pos');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$descripcion = $_POST['descripcion'];     
$dinero = $_POST['dinero'];

    $fecha = date("Y-m-d");  

    $consulta = "INSERT INTO gastos(descripcion,dinero,fecha) VALUES ('$descripcion','$dinero','$fecha' )";
    if ($conn->query($consulta) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $consulta . "<br>" . $conn->error;
    }
<<<<<<< HEAD
}else{
    $id = $_POST['id'];
    
}
=======

>>>>>>> 18716c0f8d78c5cfc96b3d7d31b76a7106bc138a


?>