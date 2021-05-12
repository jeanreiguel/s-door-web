<html>
<head>
<style>
	.fracasso {
		border-style:solid;
		border-color:coral;
	}	
	.container{
		position: absolute;
		width:20px;
		left:60%;
		top: 30%; 
	}
	.input{
		width: 350px;
		height: 35px;
		border-radius: 10px;
		position: absolute;
		left:0%;
		top: 75px;
	}

	.input2 {
		width: 350px;
		height: 35px;
		border-radius: 10px;
		position: absolute;
		left:0%;
		top: 175px;
	}

	#logar{
		width: 150px;
		height: 40px;
		border-radius: 10px;
		position: absolute;
		left: 100px;
		top: 260px;
	}

	#usuario{
		position: absolute;
		left:0%;
		top: 50px;
	}

	#senha{
		position: absolute;
		left:0%;
		top: 150px;
	}

	#logo{
		width:55%;
		height:200px;
		position: absolute;
		z-index: 999px;
		left: -40px;
		top: 250px;
		font-family: 'Roboto', sans-serif;
	}

	p{
		color:white;
		margin-left:300px;
	}

	#legend{
		width:30%;
		position: absolute;
		left:45%;
		top: 25%;
	}

	#logo > img{
		position: absolute;
		z-index: -1;
		bottom:-150px;
		margin-left:100px;
	}

	input {
		background: #161923;
		padding: 0 0.5rem;
		margin-top: 1rem;
		outline:none;
		color: rgba(166, 166, 166);
		font-size: 2rem;
		border: 1px solid #040B18;
		border-radius: 8px;
	}

	input[type="submit"] {
		cursor: pointer;
		border: none;
		border-radius: 32px;
		background: #479f76;
		color: white;
		font-size: 1.1rem;
		transition: all .3s ease-in-out;
	}

	input[type="submit"]:hover {
		background: #0f5132;
	}
	#linha{
		width: 3px;
		border-style: solid;
		border-width: 200px 2px;
		color: #161923;
		margin-left:49%;
		margin-top:150px;
	}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
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
if(isset($_POST["usuario"])) {
	$user = $_GET["usuario"];
}
?>

<body class="bg-dark text-white">
	<form method='POST' name='login' action='acesso/login.php'>
		<div class="container" id="legend">
				<legend id="legend">LOGIN</legend>
			<div id="legend">
				<label id ="usuario">USUÁRIO</label>
					<input class="input" type='text' name='usuario' value="<?php echo $user ?>" placeholder='Digite seu nome'>
				<label id="senha">SENHA</label>
					<input class="input2" type="password" name="senha"  placeholder="Digite sua senha" class="<?php echo $conexao?>">
					<input id="logar" type="submit" name="enviar" value="LOGAR">	
			</div>
		</div>
		<div id="linha">
		</div>
		<div id="logo">
			<img src="imgs/smart-lock.svg">
		</div>
</body>
</html>