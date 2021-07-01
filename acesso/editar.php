<?php
#conexão com banco de dados
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
	
	#resgata a senha caso não seja informada
	if($senha == "") {
		$result = $conn->query("SELECT senha from usuarios where codUsuario = $cod");
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$senha = $row["senha"];
			}
		}
	}
#realiza a edição do usuário 

	if($permission != "") {
		if($permission == "admin") {
				$sql = "UPDATE usuarios SET nome = '$nome', senha = '$senha', cartao = $cartao, permissao = 1 WHERE codUsuario = $cod";
		} else if ($permission == "cliente") {
				$sql = "UPDATE usuarios SET nome = '$nome', senha = '$senha', cartao = $cartao, permissao = 0 WHERE codUsuario = $cod";
		}			
	} else {
		$sql = "UPDATE usuarios SET nome = '$nome', senha = '$senha', cartao = $cartao WHERE codUsuario = $cod";
	}
	if(mysqli_query($conn, $sql)) {
		header("location: ../funções/edicao.php?user=$user");
	}else {
		echo "Error: " . $sql . mysqli_error($conn);

} 
	
  $conn->close();
?>