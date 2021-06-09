<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);

    $user = $_GET["user"];
    $estado = $_GET["estado"];

    $sql = ("INSERT INTO controle_entrada_e_saida VALUES('$user', 'online', SYSDATE(), '$estado')");
    
    if (mysqli_query($conn, $sql)) {
      header("location: ../functions.php?msg=log&user=$user&estado=$estado");
  } else {
    header("location: ../functions.php?msg=logerror&user=$user&estado=$estado");
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>