<html>
<head>
<style>
p {
	color: whitesmoke;
}
input[type="submit"] {
		cursor: pointer;
		border: none;
		border-radius: 2px;
		background: #479f76;
		color: white;
		font-size: 1.1rem;
		transition: all .3s ease-in-out;
	}
	#table {
        width:70%;
		margin-left:10%;
    }
	thead {
		background: #198754;
	}
	thead h1 {
        color: black;
		font-size:20px;
    }
    thead p {
        color: white;
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

echo " 
	<div id='table'>
	<table class='table'>
	<thead>
    <tr>
      <th scope='col'><h1>CÓDIGO</h1></th>
      <th scope='col'><h1>NOME</h1></th>
      <th scope='col'><h1>SENHA</h1></th>
	  <th scope='col'><h1>PERMISSAO</h1></th>
	  <th scope='col'><h1>DENTRO</h1></th>
    </tr>
  </thead>
  <tbody>";
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "
	
	<tr> <th scope='row'>
	<p>" . $row["codUsuario"]. "</p></th>
	<td><p>" . $row["nome"]. "</p></td>
	<td><p>" . $row["senha"]. "</p></td>
	<td><p>" . $row["permissao"]. "</p></td>
	<td><p>" . $row["dentro"]. "</p></td>
	</tr>
	</tbody>";
	}
	echo "</table></div>";
}
echo "</body>";
$conn->close();
?>
</html>