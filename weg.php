<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="input_style.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
</head>

<?php

$user = "";
$conexao = "";

if(isset($_GET['msg'])) {
	if($_GET['msg'] == 'sucesso') {
		echo "
			<script>
			alert('Login realizado com sucesso');
			</script>
		";
		$conexao = "sucesso";
	}else if($_GET['msg'] == 'erro') {
		echo "
			<script>
			alert('Erro de usuário ou senha');
			</script>
		";
		$conexao = "fracasso";
	}
}
if(isset($_POST["user"])) {
	$user = $_GET["user"];
}
?>

<body>
	<div id="logo">
		<img src="imgs/smart-lock.svg">
    </div>
	<div id="linha">
	</div>	
	<div id="inputs">
		<form method='POST' name='login' action='acesso/login.php' class="form">
		<h1 class="form__title">Login</h1>
		<div class="form__div">
			<input class="form__input" type='text' name='user' value="<?php echo $user ?>" placeholder=" ">
			<label for="" class="form__label">USUÁRIO</label>
		</div>

		<div class="form__div">
			<input class="form__input" type="password" name="senha" class="<?php echo $conexao?>" placeholder=" ">
			<label for="" class="form__label">SENHA</label>
			<input id="logar" type="submit" name="enviar" value="LOGAR">
		</div>
	</div>
</body>
</html>