<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);

	$user = $_GET["user"];
	$cod = $_POST["cod"];
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];
	$cartao = $_POST["cartao"];
	$permission = $_POST["perm"];
	
		
		if($nome != "") {
			$sql = "UPDATE usuarios SET nome = $nome WHERE codUsuario = $cod";
			execute->mysqli_query($conn, $sql);
		}
		if($senha != "") {
			$sql = "UPDATE usuarios SET senha = $senha WHERE codUsuario = $cod";
			mysqli_query($conn, $sql);
		}
		if($cartao != "") {
			$sql = "UPDATE usuarios SET cartao = $cartao WHERE codUsuario = $cod";
			mysqli_query($conn, $sql);
		}
		if($permission != "") {

			if($permission == "admin") {
				$sql = "UPDATE usuarios SET permissao = true WHERE codUsuario = $cod";
			} else if ($permission == "cliente") {
				$sql = "UPDATE usuarios SET permissao = false WHERE codUsuario = $cod";
			}		
			mysqli_query($conn, $sql);
		}
	header("location: ../funções/edicao.php?user=$user");	
	
  $conn->close();
?>