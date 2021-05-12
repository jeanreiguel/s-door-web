<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "projetoweg";
	$conn = new mysqli($servername, $username, $password, $db);
	
	$inserir = $_GET['inserir'];
	$deletar = $_POST['delete'];
	
	$sql = ("UPDATE conteudo SET visivel = false WHERE id = $deletar ");
	
	if(mysqli_query($conn, $sql)) {
			header("location:listagem.php");
	
		}else {
			header("location:listagem.php");
	
		
	}
	echo $inserir;
	if ($_GET['inserir'] == 'inserir') {
		if(mysqli_query($conn, $sql)) {
			header("location:cadastro.php");
			echo "valor inserido";
		}else {
			header("location:cadastro.php");
	
		
	}
	}
?>