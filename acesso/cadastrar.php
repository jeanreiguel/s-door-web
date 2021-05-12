<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "projetoweg";
 
$conn = new mysqli($servername, $username, $password, $db);
	
	$secao = $_POST["secao"];
	$id = 'null';
	$titulo = $_POST["titulo"];
	$descricao = $_POST["descricao"];
	$cta = $_POST["cta"];
	$linkcta = $_POST["linkcta"];
	$cta2 = $_POST["cta2"];
	$linkcta2 = $_POST["linkcta2"];
	$lista = $_POST["lista"];
	$visivel = $_POST["visivel"];

	$sql = ("INSERT INTO conteudo VALUES ('$secao',$id,'$titulo','$descricao','$cta','$linkcta','$cta2','$linkcta2','$lista',$visivel);");
	if (mysqli_query($conn, $sql)) {
      echo "
	<html>
	<script>
		alert('###### SUCESSO AO INSERIR ######');
		</script>
	</html>	";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	
	?>