<html>
<head>
<link rel="stylesheet" href="style_menu.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php 
if(!isset($_GET["estadoatual"])){$_GET["estadoatual"] = 'FECHADA'; };
$estadoatual = $_GET["estadoatual"];
if(isset($_GET["user"])){ $user = $_GET["user"]; };
if(isset($_GET["estado"])){ $user = $_GET["estado"]; };

if(isset($_GET['msg'])) {
	if($_GET['msg'] == 'log') {
		if($estadoatual == 'ABERTA') {
			echo "
			<html>
			<script>
				alert('-------- SUCESSO AO ABRIR ------');
				</script>
			</html>	";
		} else if($estadoatual == 'FECHADA') {
			echo "
			<html>
			<script>
				alert('-------- SUCESSO AO FECHAR ------');
				</script>
			</html>	";
		}
		
	}else if($_GET['msg'] == 'logerror') {
		echo "
			<script>
			alert('ERRO AO $estado');
			</script>
		";
	}else if($_GET['msg'] == 'already') {
		echo "
			<script>
			alert('A PORTA JA ESTÁ $estadoatual');
			</script>
		";
	}
}
	?>
	<!-- página de menu admin-->
<body class="text-white">
	<div id="menu">
		<img src="imgs/smart-lock.svg">
		<h1>SENAI</h1>
		<a href="weg.php" id="sair">Sair</a>
	</div>
	<div id="hold">
		<div id="estadoporta">
		<form method='GET' name='selecao' action='acesso/porta.php?>'>
		<h1 id="estadoatual">ESTADO ATUAL: <?php echo $_GET['estadoatual']; ?></h1>
			<fieldset id="camposstatus">
				<input type="hidden" name="user" value=<?php echo $user ?>>
				<input type="hidden" name="estadoatual" value=<?php echo $estadoatual ?>>
				<input type="submit" name="estado" value="ABRIR" class="itens">
				<input type="submit" name="estado" value="FECHAR" class="itens">
			</fieldset>
			</form>
		</div>
		
	
		<div id="opcoes">
		<form method='POST' name='selecao' action='acesso/selecao.php?user=<?php echo $user ?>'>
			<legend>OPÇÕES</legend>

			<fieldset id="campos">			
				<label>LISTAGEM</label>
					<input type='submit' name='opcao' value='listagem'>
				<label>CADASTRO</label>
					<input type='submit' name='opcao' value='cadastro'>
				<label>EDIÇÃO</label>
					<input type='submit' name='opcao' value='edicao'>
				<label>LOGS</label>
					<input type='submit' name='opcao' value='logs'>
			</fieldset>
		</form>	
		</div>
	</div>
</body>
</html>