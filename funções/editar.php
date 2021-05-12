<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "projetoweg";
 
$conn = new mysqli($servername, $username, $password, $db);

	$linha = $_GET['ID'];
	$coluna = $_GET['coluna'];
	$alteracao = $_GET['alteracao'];
	
	$sql = ("UPDATE conteudo SET $coluna = '$alteracao' WHERE id = $linha");
	
	if (mysqli_query($conn, $sql)) {
		
      echo "
	<html>
	<script>
		alert('###### SUCESSO AO INSERIR ######');
		</script>
	</html>	";
	header("location: ../edicao.php");
} else {
      echo "
	  <html>
	<script>
		alert(erro 202);
		</script>
	</html>	";
	header("location: ../edicao.php");
}
?>