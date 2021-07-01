<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style/style_cadastro.css">
<link rel="stylesheet" href="style/input_style.css">
</head>
<?php if(isset($_GET["msg"])) {
	if($_GET["msg"] == 'erro') {
	echo "
	<html>
	<script>
		alert('###### ERRO AO INSERIR ######');
		</script>
	</html>	";
	} else if($_GET["msg"] == 'sucesso') {
		echo "
		<html>
		<script>
			alert('###### SUCESSO AO INSERIR ######');
			</script>
		</html>	";
	}
}
if(isset($_GET["user"])) {
$user = $_GET["user"];
}
?>
<!-- página de cadastro de usuário-->
<body class="text-white">	

	<div id="menu">
		<a href="../functions.php?user=<?php echo $user ?>">
		<img id="imagem" src="../imgs/smart-lock.svg">
		<h1>SENAI</h1>
		</a>
		<a href="weg.php" id="sair">Sair</a>

	</div>
	<div id="cadastrar">
		<legend id="legend">CADASTRO DE USUÁRIO</legend>
		<div id="inputs">
		<form id="campos" method='POST' name='insert' action='../acesso/cadastrar.php?user=<?php echo $user ?>'>
			<div id="cadastra">
				<div class="form__div">
					<input class="form__input" type='text' name='nome' placeholder=" ">
					<label for="" class="form__label">NOME</label>
				</div>
				<div class="form__div">
					<input class="form__input" type="password" name="senha" placeholder=" ">
					<label for="" class="form__label">SENHA</label>
				</div>
				<div class="form__div">
					<input class="form__input" type='text' name='cartao' placeholder=" ">
					<label for="" class="form__label">CARTÃO</label>
				</div>
				
					<legend id="select">PERMISSÃO</legend>
					<input type="button" id="admin" name="permission" value="admin" onclick="selected('admin', 'cliente')">
					<input type="button" id="cliente" name="permission" value="cliente" onclick="selected('cliente', 'admin')">
					<input type="hidden" id="perm" name="perm" value="">
					<br>
				<input type="submit" name="inserir" value="CADASTRAR">
			</div>
	</div>		
	</form>
		<script>
			//seleção da permissão
			var valor;
			function selected(x, y) {
				document.getElementById(x).style.background = "#479f76";
				document.getElementById(y).style.background = "#969696";
				valor = document.getElementById(x).value;

				document.getElementById("perm").value = valor;
			}	
		</script>
</body>
</html>
