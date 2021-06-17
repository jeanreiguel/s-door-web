<?php
$listagem = 'listagem';
$cadastro = 'cadastro';
$edicao = 'edicao';
$logs = 'logs';

$user = $_GET["user"];

		if(isset($_POST["opcao"])) {
	
			$opcao = $_POST["opcao"];
		if($opcao == $listagem) {
			header("location: ../funções/listagem.php?user=$user");			
		}else if ($opcao == $cadastro){
			header("location: ../funções/cadastro.php?user=$user");
		}else if ($opcao == $edicao){
			header("location: ../funções/edicao.php?user=$user");
		}else if ($opcao == $logs){
			header("location: ../funções/logs.php?user=$user");
		}
		else {
			header("location: ../functions.php?msg=erro&user=$user");
		}
}


?>