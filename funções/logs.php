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
					<th><p>Usuário</p></th>
					<th><p>Método</p></th>
					<th><p>Hora e Data</p></th>
					<th><p>Situação</p></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = ("SELECT * FROM CONTROLE_ENTRADA_E_SAIDA");
				$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								
								echo "
								<tr class='row'>	
								<td scope='col'>" . $row["Usuario"]. "</td>
								<td scope='col'><p>" . $row["metodo"]. "</p></td>
								<td scope='col'><p>" . $row["hora_e_data"]. "</p></td>
								<td scope='col'><p>" . $row["situacao"] . "</p></td>
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