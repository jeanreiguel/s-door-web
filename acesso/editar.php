<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);

	$linha = $_GET['cod'];
	$coluna = $_GET['coluna'];
	$alteracao = $_GET['alteracao'];
	
	$sql = ("UPDATE usuarios SET $coluna = '$alteracao' WHERE codUsuario = $linha;");
 
?>