<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);
	
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];


	$sql = ("INSERT INTO usuarios VALUES (null,'$nome','$senha','1','0')");
	if (mysqli_query($conn, $sql)) {
      echo "
	<html>
	<script>
		alert('###### SUCESSO AO INSERIR ######');
		</script>
	</html>	";
	header("location: ../funções/cadastro.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	
?>