<html>
<head>
<style>
	* {
		padding:0;
		margin:0;
	}
	body{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		font-size: 25px;	
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

	#menu > a > h1{
		font-style: italic;
		font-weight: 900;	
		font-family: 'Roboto', sans-serif;
		font-size:  40px;
		color:white;
	}
	#menu > a {
		text-decoration:none;
	}

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
		width: 240px;
		cursor: pointer;
		border: none;
		border-radius: 32px;
		background: #479f76;
		color: white;
		transition: all .3s ease-in-out;
		margin-top:-10px;
	}

	input[type="submit"]:hover {
		background: #0f5132;
	}

	#campos{
		margin-top:70px;
		font-size: 20px;
	}

	#cadastra{
		width: 350px;
		margin-left: 800px;
		padding: 30px;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: flex-start;
	}

	#eye{
		right:155px;
		top:333px;
		width: 20px;
		color: rgba(166, 166, 166);
		cursor: pointer;
		position: absolute;
	}

	label{
		margin-top:15px;
	}

	#linha{
		width: 3px;
		border-style: solid;
		border-width: 200px 2px;
		color: #161923;
		margin-top:150px;
	}

	#usuario{
		left:0%;
		top: 50px;
	}

	#senha{
		left:0%;
		top: 150px;
	}

	#img{
		width:25%;
		height:200px;
		margin-top:-450px;
		margin-left: -750px;
	}

	p{
		color:white;
		margin-left:300px;
	}

	.container{
		margin-top:-250px;
	}

	#legend{
		width: 350px;
		margin-left: 800px;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: flex-start;
	}
	#select {
		font-size:16px;
		margin-left:200px;
		margin-bottom:15px;
	}
	#arrow {
		height:20px;
		width:20px;
		position:absolute;
		left:50px;
		top:30px;
		background-image:url("../imgs/left-arrow.svg")
	}
	input[type=button] {
	border: 1px solid;
	border-radius:2px;
	padding-left: 0.3em;
	padding-right:0.3em;
	background:#479f76;
	color:black;
	-webkit-appearance: none;
	position:relative;
	}
	#admin {
		left:50px;
		top:-7px;
	}
	#cliente {
		right:50px;
		top:-40px;
	}
	p {
		color: white;
	}
	#table {
        width:20%;
		margin-top:5%;
		margin-left:15%;
    }
	thead {
        background: #198754;
    }
    thead p {
        color: black;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<body>	
	<div id="menu">
		<a href="../functions.php?user=$user">
		<img src="../imgs/smart-lock.svg">
		<h1>SENAI</h1>
		</a>
	</div>	
<?php
$user = $_GET["user"];

?>			
	<form id="campos" method='POST' name='insert' action='../acesso/cadastrar.php'>
	<div class="container">
		<legend id="legend">CADASTRO DE USUÁRIO</legend>
			<div id="cadastra">
					<input type='text' name='nome' placeholder='nome'><br>
					<input id='senha' type='password' name='senha' placeholder='senha'><br>
					<input type='text' name='cartao' placeholder='cartao'><br>
					<legend id="select">PERMISSÃO</legend>
					<input type="button" id="admin" name="permission" value="admin" onclick="selected('admin', 'cliente')">
					<input type="button" id="cliente" name="permission" value="cliente" onclick="selected('cliente', 'admin')">
					<input type="hidden" id="perm" name="perm" value="">
					<img id="eye" onclick="mostrarSenha()" src="../imgs/eye.png">
					<br>
				<input type="submit" name="inserir" valu	e="CADASTRAR">
			</div>
	</div>		
	</form>
		<script>
			function mostrarSenha(){
				var tipo = document.getElementById("senha");
				var icon = document.getElementById("eye");
				if(tipo.type == "password"){
					icon.src = "../imgs/eye-off.png";
					tipo.type = "text";
				}else{
					icon.src = "../imgs/eye.png";
					tipo.type = "password";
				}
			}
			var valor;
			function selected(x, y) {
				document.getElementById(x).style.background = "black";
				document.getElementById(y).style.background = "green";

				valor = document.getElementById(x).value;

				document.getElementById("perm").value = valor;
			}	
		</script>
</body>
</html>
