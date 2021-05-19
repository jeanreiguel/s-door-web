<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);
	
	$id = $_POST["cod"];
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];
	$perm = $_POST["permissao"];


	$sql = ("INSERT INTO usuarios VALUES ($id,'$nome',$senha,$perm,'0')");
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