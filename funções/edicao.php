<html>
<head>
<style>
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
		border-radius: 5px;
		background: #479f76;
		color: white;
		font-size: 1.1rem;
		transition: all .3s ease-in-out;
	}

	input[type="submit"]:hover {
		background: #0f5132;
	}
	p {
		color: white;
	}
	
	#table {
        width:70%;
		margin-left:0%;
    }
	thead {
        background: #198754;
    }
    thead p {
        color: black;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="row justify-content-lg p-3 mb-2 bg-dark text-white">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);

$sql = ("SELECT codUsuario, nome, senha, permissao, dentro FROM usuarios WHERE permissao = TRUE");
	
$result = $conn->query($sql);

echo " 
	<div  id='table'>
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
	echo "</table></div>";
}
?>			
		<form method='GET' action='../acesso/editar.php'>
		<label>|| USER: </label>
				<input type='number' name='cod' placeholder="código do usuário">
		<label>||ALTERAÇÃO - </label>
				<input type='text' name='alteracao'>
				<label> NA COLUNA - </label>
				<input type='submit' name='coluna' value='nome'>
				<input type='submit' name='coluna' value='senha'>
				<input type='submit' name='coluna' value='permissao'>
				<input type='submit' name='coluna' value='dentro'>
		</form> 
	</body>
</html>