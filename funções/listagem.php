<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="style/style_listagem.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
$conn = new mysqli($servername, $username, $password, $db);
$user = $_GET["user"];
?>
<body class="text-white">	
	<div id="menu">
			<img id="imagem" src="../imgs/smart-lock.svg">
			<h1>SENAI</h1>
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
					<th><p>DELETAR</p></th>
				</tr>
			</thead>
			<tbody>
				<?php
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
								<tr class='row'>	
								<td scope='col'>" . $row["codUsuario"]. "</td>
								<td scope='col'><p>" . $row["nome"]. "</p></td>
								<td scope='col'><p>" . $password . "</p></td>
								<td scope='col'><p>" . $row["cartao"]. "</p></td>
								<td scope='col'><p>" . $permissao . "</p></td>
								<form method='POST' name='deletar' action='../acesso/deletar.php?user=$user'>
								<input type='hidden' id='valor' name='row' value='$row[codUsuario]'>
								<td scope='col'><input type='submit' class='deletar' value='X'></td>
								</form>
								</tr>";
							}
						}
					$conn->close();
					?>
			</tbody>
		</table>
	</div>
	</div>
		<script>
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