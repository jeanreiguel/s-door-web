<?php
#conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);
	
$user = $_GET["user"];
#realiza o cadastro do usuário

	$nome = $_POST["nome"];
	$senha = $_POST["senha"];
	$cartao = $_POST["cartao"];
	$permission = $_POST["perm"];
echo "
	<html>
	<script>
		alert('###### SUCESSO AO INSERIR ######');
		</script>
	</html>	";
	if($permission == "admin") {
		$sql = ("INSERT INTO usuarios VALUES (null,'$nome','$senha','$cartao',true)");
	} else if ($permission == "cliente") {
		$sql = ("INSERT INTO usuarios VALUES (null,'$nome','$senha','$cartao',false)");
	}
	
	if (mysqli_query($conn, $sql)) {
	header("location: ../funções/cadastro.php?user=$user&msg=sucesso");
} else {
	  header("location: ../funções/cadastro.php?msg=erro&user=$user");
}
	
?>