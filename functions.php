<html>
<head>
<link rel="stylesheet" href="style_menu.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php 
if(isset($_GET["user"])){ $user = $_GET["user"]; };
if(isset($_GET["estado"])){ $estado = $_GET["estado"]; };

if(isset($_GET['msg'])) {
	if($_GET['msg'] == 'log') {
		echo "
      <html>
      <script>
          alert('-------- SUCESSO AO $estado ------');
          </script>
      </html>	";
	}else if($_GET['msg'] == 'logerror') {
		echo "
			<script>
			alert('ERRO AO $estado');
			</script>
		";
	}
}
	?>
<body class="text-white">
	<div id="menu">
		<img src="imgs/smart-lock.svg">
		<h1>SENAI</h1>
	</div>
	<div id="hold">
		<form method='GET' name='selecao' action='acesso/porta.php'>
		<div id="estadoporta">
		<h1>ESTADO ATUAL ********</h1>
			<fieldset id="camposstatus">
				<input type="hidden" name="user" value=<?php echo $user ?>>	
				<input type="submit" name="estado" value="ABRIR" class="itens">
				<input type="submit" name="estado" value="FECHAR" class="itens">
			</fieldset>
		</div>
		</form>
		<form method='POST' name='selecao' action='acesso/selecao.php?user=<?php echo $user ?>'>
		<div id="opcoes">
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
		</div>
		</form>	
	</div>
</body>
</html>