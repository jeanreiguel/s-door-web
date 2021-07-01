<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";

$conn = new mysqli($servername, $username, $password, $db);

$sql = ("SELECT * FROM usuarios");

$result = $conn->query($sql);
if(isset($_POST["user"]) && isset($_POST["senha"])){
	$user = $_POST["user"];
	$senha = $_POST["senha"];
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$people = $row["nome"];
			$password = $row["senha"];
			

			if($user == $people && $senha == $password) {
				$perm = $row["permissao"];
				$conexao = "sucesso";	
				$erro = 'correto';	
				if($perm == 1) {
					header("location: ../functions.php?msg=sucesso&user=$user");
				} else if($perm == 0) {
					header("location: ../functions_client.php?msg=sucesso&user=$user&noperm##");
				} 
			}
		}
		if($erro != 'correto') {
		header("location: ../weg.php?msg=erro");
		$conexao = "fracasso";
		}
	}

}
?>