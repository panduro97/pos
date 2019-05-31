<?php 


$conn = mysqli_connect('bigdeli.mx', 'atomstud_sergio', 'bigdeli123', 'atomstud_pos');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/* echo "Connected successfully"; */
$info = $_POST['data'];            
/* echo($info);   */
if($info == true){



$consulta3 = "SELECT * from productos WHERE descripcion = 'Crudo'";
    echo "Si entro";
    $datos = $conn->query($consulta3);
    $row = mysqli_fetch_array($datos);
   $row2 = $row['stock'];


$consulta3 = "SELECT * from productos WHERE descripcion = 'Cocido'";
   echo "Si entro";
   $datos = $conn->query($consulta3);
   $rows = mysqli_fetch_array($datos);
   $row3 = $rows['stock'];
  
  $resultado = $row2 + $row3;

$consulta2 = "UPDATE productos SET stock = $resultado WHERE descripcion = 'Cocido'";
 if ($conn->query($consulta2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
} 

$consulta = "UPDATE productos SET stock = '0' WHERE descripcion = 'Crudo'";
 if ($conn->query($consulta) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
} 

}

     




?>