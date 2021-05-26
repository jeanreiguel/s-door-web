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
		margin-left:15%;
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
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
$conn = new mysqli($servername, $username, $password, $db);

$sql = ("SELECT codUsuario, nome, senha, dentro FROM usuarios WHERE permissao = TRUE");
echo"<body class='row justify-content-lg mb-2 bg-dark text-white'>	";
$result = $conn->query($sql);

echo " 
<div id='menu'>
<a href='../functions.php' ><div id='arrow'></div></a>
	<img src='../imgs/smart-lock.svg'>
	<h1>SENAI</h1>
</div>
	<div id='table'>
	<table class='table'>
	<thead>
    <tr>
      <th scope='col'><h1>CÓDIGO</h1></th>
      <th scope='col'><h1>NOME</h1></th>
      <th scope='col'><h1>SENHA</h1></th>
	  <th scope='col'><h1>DENTRO</h1></th>
	  <th scope='col'><h1>DELETAR</h1></th>
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
	<td><p>" . $row["dentro"]. "</p></td>
	<td><input type='submit' name='deletar' value='$row[codUsuario]' action='deletar.php'></td>
	</form>
	</tr>
	</tbody>";
	}
	echo "</table></div>";
}
echo "</body>";
$conn->close();
?>
</html>