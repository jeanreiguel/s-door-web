<html>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="style/style_edicao.css">
<link rel="stylesheet" href="../input_style_full.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);

if(isset($_GET["msg"])) {
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
$user = $_GET["user"];
?>
<!-- página de edição de usuários-->
<body class="text-white">	
	<div id="menu">
		<a href="../functions.php?user=<?php echo $user ?>">
		<img id="imagem" src="../imgs/smart-lock.svg">
		<h1>SENAI</h1>
		</a>
		<a href="weg.php" id="sair">Sair</a>
	</div>
	<div id="a">
	<div id="scroll">
		<table id='table'>
			<thead>
				<tr>
					<th><p>CÓDIGO</p></th>
					<th><p>NOME</p></th>
					<th><p>SENHA</p></th>
					<th><p>CARTÃO</p></th>
					<th><p>PERMISSÃO</p></th>
				</tr>
			</thead>
			<tbody>
				<?php
				#faz a exibição dos usuários
				$sql = ("SELECT codUsuario, nome, senha, cartao, permissao FROM usuarios");
				$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								
								if($row["permissao"] == 1) {
									$permissao = "Administrador";
								} else if($row["permissao"] == 0) {
									$permissao = "Cliente";
								}
								$password = str_repeat("*", strlen($row["senha"]) + 3); 
								echo "
								<form method='POST' id='form' name='delete' action='../acesso/deletar.php?user=$user'
								<tr class='row'>	
								<td scope='col'>" . $row["codUsuario"]. "</th>
								<td scope='col'><p>" . $row["nome"]. "</p></td>
								<td scope='col'><p>" . $password . "</p></td>
								<td scope='col'><p>" . $row["cartao"]. "</p></td>
								<td scope='col'><p>" . $permissao . "</p></td>
								</tr></form>";
							}
						}
					$conn->close();
					?>
			</tbody>
		</table>
	</div>
	
	<div class="container">
		<legend id="legend"><p>EDITAR DE USUÁRIO</p></legend>
		<div id="inputs">
		<form id="campos" method='POST' name='insert' action='../acesso/editar.php?user=<?php echo $user ?>'>
			<div id="edita">
				<div class="form__div">
					<input class="form__input" type='text' id='nome' name='nome' placeholder=" ">
					<label for="" class="form__label">NOME</label>
				</div>
				<div class="form__div">
					<input class="form__input" type="password" id='senha'name="senha" placeholder=" ">
					<label for="" class="form__label">SENHA</label>
				</div>
				<div class="form__div">
					<input class="form__input" type='text' id='cartao' name='cartao' placeholder=" ">
					<label for="" class="form__label">CARTÃO</label>
				</div>
				<div id="aviso">
					<p>Selecione um cliente na tabela</p>
				</div>
				
					<legend id="select">PERMISSÃO</legend>
					<input type="button" id="admin" name="permission" value="admin" onclick="selected('admin', 'cliente')">
					<input type="button" id="cliente" name="permission" value="cliente" onclick="selected('cliente', 'admin')">
					<input type="hidden" id="perm" name="perm" value="">
					<input type="hidden" id="cod" name="cod" value="">
					<br>
				<input type="submit" id="edit" class="disabled" name="inserir" value="EDITAR" onclick="formconf();">
			</div>	
		</form>
	</div>
		<script>
			
			var row, row2, row4; 
			//conferência dos dados presentes nos inputs
			function formconf() {
				if(document.insert.nome.value == "") {
					document.getElementById("nome").value = row2;
				} 
				if(document.insert.cartao.value == "") {
					document.getElementById("cartao").value = parseInt(row4);
				} 
			}
			//ativação do botão após selecionar usuário
			var button = document.getElementById("edit");
			button.disabled = true;
			var valor;
			//seleçãoa da permissão
			function selected(x, y) {
				document.getElementById(x).style.background = "#479f76";
				document.getElementById(y).style.background = "#969696";
				valor = document.getElementById(x).value;
				document.getElementById("perm").value = valor;
			}	
			//seleção de usuário na listagem
			$('tr').click(function() { 
				$(this).addClass('selected_row').siblings().removeClass('selected_row');
				$('.disabled').addClass('enabled');
				button.disabled = false;
				row = parseInt($(this).find('td:first').text());
				row2 = $(this).find('td:nth-child(2)').text();
				row4 = $(this).find('td:nth-child(4)').text();
				document.getElementById("aviso").style.display = "none";
				document.getElementById("cod").value = row;
			});
		</script>
</body>
</html>
