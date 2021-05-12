<html>
<head>
<style>
input[type="submit"] {
		cursor: pointer;
		border: none;
		border-radius: 2px;
		background: #479f76;
		color: white;
		font-size: 1.1rem;
		transition: all .3s ease-in-out;
	}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
$conn = new mysqli($servername, $username, $password, $db);

$sql = ("SELECT codUsuario, nome, senha, permissao, dentro FROM usuarios WHERE permissao = TRUE");
echo"<body class='row justify-content-lg p-3 mb-2 bg-dark text-white'>	";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo " 
	<table class='table'>
	<thead>
    <tr>
      <th scope='col'><p>CÓDIGO</p></th>
      <th scope='col'><p>NOME</p></th>
      <th scope='col'><p>SENHA</p></th>
	  <th scope='col'><p>PERMISSAO</p></th>
	  <th scope='col'><p>DENTRO</p></th>
    </tr>
  </thead>
  <tbody>";
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "
	
	<tr> <th scope='row'>
	<p>" . $row["codUsuario"]. "</p></th>
	<td><p>" . $row["nome"]. "</p></td> <td><p>" . $row["senha"]. "</p></td>
	<td><p>" . $row["permissao"]. "</p></td>
	<td><p>" . $row["dentro"]. "</p></td>
	</tr>
	</tbody>";
	}
	echo "</table>";
}
		}
	}
echo "</body>";
$conn->close();
?>
</html>
