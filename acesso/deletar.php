<?php
#conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
	$conn = new mysqli($servername, $username, $password, $db);

#deleta o usuário, funcionalidade que está na página de listagem
$user = $_GET["user"];
	$deletar = $_POST['row'];
	
	$sql = ("DELETE FROM usuarios WHERE codUsuario = $deletar ");
	
	if(mysqli_query($conn, $sql)) {
			header("location:../funções/listagem.php?user=$user&msg=sucesso");
		}else {
			header("location:../funções/listagem.php?user=$user&msg=fracasso");
	}
?>