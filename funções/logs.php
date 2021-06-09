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
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portaiot";
$conn = new mysqli($servername, $username, $password, $db);

$sql = ("SELECT * FROM CONTROLE_ENTRADA_E_SAIDA");
echo"<body class='row justify-content-lg mb-2 bg-dark text-white'>	";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
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
			<th scope='col'><p>MÉTODO</p></th>
			<th scope='col'><p>HORÁRIO</p></th>
			<th scope='col'><p>SITUAÇÃO</p></th>
			</tr>
		</thead>
		<tbody>";
	if ($result->num_rows >= 0) {	

	while($row = $result->fetch_assoc()) {
			echo "
			<tr> 
			<th scope='row'>
			<p>" . $row["Usuario"]. "</p></th>
			<td><p>" . $row["metodo"]. "</p></td>
			<td><p>" . $row["hora_e_data"]. "</p></td> 
			<td><p>" . $row["situacao"]. "</p></td> 
			</tr>
			";
			}
			echo "</tbody></table></div>";
	}
}
	
echo "</body>";
$conn->close();
?>
</html>
