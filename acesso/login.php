<?php

$people = "jenas";
$password = "jenas";

if(isset($_POST["usuario"]) && isset($_POST["senha"])){
		$user = $_POST["usuario"];
		$senha = $_POST["senha"];
		
		if($user == $people && $senha == $password) {
			header("location: ../functions.php?msg=sucesso&usuario=$user");
			$conexao = "sucesso";
					
		}else {
			header("location: ../weg.php?msg=erro&usuario=$user");
			$conexao = "fracasso";
		}
}

?>