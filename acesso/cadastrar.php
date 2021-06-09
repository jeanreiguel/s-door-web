<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);
	
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
		$sql = ("INSERT INTO usuarios VALUES (null,'$nome',md5('$senha'),'$cartao',true)");
	} else if ($permission == "cliente") {
		$sql = ("INSERT INTO usuarios VALUES (null,'$nome',md5('$senha'),'$cartao',false)");
	}
	
	if (mysqli_query($conn, $sql)) {
	header("location: ../funções/cadastro.php?msg=sucesso");
} else {
	  header("location: ../funções/cadastro.php?msg=erro");
}
	
?>