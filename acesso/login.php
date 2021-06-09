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
				header("location: ../functions.php?msg=sucesso&user=$user");
				$conexao = "sucesso";	
				$erro = 'correto';		
			} else {
				$erro = 'erro';
			}
		}
	}
	if($erro == 'erro') {
		header("location: ../weg.php?msg=erro&user=$user");
		$conexao = "fracasso";
	}
}
?>