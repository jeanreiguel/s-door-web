<?php 
#realiza a abertura da porta e registro dos dados no banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);

    $user = $_GET["user"];
    $estado = $_GET["estado"];
    $estadoatual = $_GET["estadoatual"];

    if($estadoatual == 'ABERTA' && $estado == 'ABRIR') {
      header("location: ../functions.php?msg=already&user=$user&estadoatual=$estadoatual");
    } else if($estadoatual == 'FECHADA' && $estado == 'FECHAR') {
      header("location: ../functions.php?msg=already&user=$user&estadoatual=$estadoatual");
    } else {
        $sql = ("INSERT INTO controle_entrada_e_saida VALUES('$user', 'online', SYSDATE(), '$estado')");

        if($estado == 'ABRIR') {
          $estadoatual = 'ABERTA';
        } else if($estado = 'FECHAR') {
          $estadoatual = 'FECHADA';
        }
        if (mysqli_query($conn, $sql)) {
          header("location: ../functions.php?msg=log&user=$user&estadoatual=$estadoatual");
      } else {
        header("location: ../functions.php?msg=logerror&user=$user&estadoatual=$estadoatual");
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
    
    
    
?>