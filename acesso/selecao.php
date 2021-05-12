<?php
$listagem = 'listagem';
$cadastro = 'cadastro';
$edicao = 'edicao';
	
		if(isset($_POST["opcao"])) {
	$opcao = $_POST["opcao"];
		if($opcao == $listagem) {
			header("location: ../funções/listagem.php");			
		}else if ($opcao == $cadastro){
			header("location: ../funções/cadastro.php");
		}else if ($opcao == $edicao){
			header("location: ../funções/edicao.php");
		}
		else {
			header("location: ../functions.php?msg=erro&usuario=$user");
		}
}


?>