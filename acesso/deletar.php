<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
	$conn = new mysqli($servername, $username, $password, $db);

	$user = $_GET["user"];
	$deletar = $_POST['deletar'];
	
	$sql = ("DELETE FROM usuarios WHERE codUsuario = $deletar ");
	
	if(mysqli_query($conn, $sql)) {
			header("location:../funções/listagem.php?user=$user");
	
		}else {
			header("location:../funções/listagem.php?user=$user");
	
		
	}
?>