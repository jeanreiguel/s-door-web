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
		margin-top:5%;
		margin-left:15%;
    }
	thead {
        background: #198754;
    }
    thead p {
        color: black;
    }
	#arrow {
		height:20px;
		width:20px;
		position:absolute;
		left:50px;
		top:30px;
		background-image:url("../imgs/left-arrow.svg")
	}
	#menu{
		width:100%;
		height:70px;
		background-color: #479f76;
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: center;
	}

	#menu > img{
		width:70px;
		height:70px;
		margin-left:100px;
	}

	#menu > h1{
		font-style: italic;
		font-weight: 900;	
		font-family: 'Roboto', sans-serif;
		font-size:  40px;
		color:white;
	}
	form {
		margin-top:5%;
		margin-left:15%;
	}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="row justify-content-lg mb-2 bg-dark text-white">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
 
$conn = new mysqli($servername, $username, $password, $db);

$sql = ("SELECT codUsuario, nome, senha, cartao FROM usuarios WHERE permissao = TRUE");
	
$result = $conn->query($sql);

echo " 
<div id='menu'>
	<a href='../functions.php' ><div id='arrow'></div></a>
		<img src='../imgs/smart-lock.svg'>
		<h1>SENAI</h1>
	</div>
	<div  id='table'>
	<table class='table'>
	<thead>
    <tr>
      <th scope='col'><p>CÓDIGO</p></th>
      <th scope='col'><p>NOME</p></th>
      <th scope='col'><p>SENHA</p></th>
	  <th scope='col'><p>CARTAO</p></th>
	  <th scope='col'><p>EDITAR</p></th>
    </tr>
  </thead>
  <tbody>";
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "
	
	<form method='POST' name='delete' action='../acesso/deletar.php'
	<tr> <th scope='row'>
	<p>" . $row["codUsuario"]. "</p></th>
	<td><p>" . $row["nome"]. "</p></td> 
	<td><p>" . $row["senha"]. "</p></td>
	<td><p>" . $row["cartao"]. "</p></td>
	<input type='hidden' name='user' value='.$row[codUsuario]'>
	<td><input type='submit' name='editar' value='EDITAR' action='editar.php'></td>
	</form>
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
				<input type='submit' name='coluna' value='cartao'>
		</form> 
	</body>
</html>