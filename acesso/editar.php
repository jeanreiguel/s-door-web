<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);

	$cod = $_GET['cod'];
	$coluna = $_GET['coluna'];
	$alteracao = $_GET['alteracao'];
	
	$sql = ("UPDATE usuarios SET $coluna = '$alteracao' WHERE codUsuario = $cod;");
	$result = $conn->query($sql);

	$conn->close();
	if (mysqli_query($conn, $sql)) {
		
	  header("location: ../funções/cadastro.php");
  } else {
		echo "Error: " 
		echo "
	  <html>
	  <script>
		  alert('###### ERRO AO EDITAR ######'<br>. $sql . '<br>' . mysqli_error($conn););
		  </script>
	  </html>	";
  }
?>