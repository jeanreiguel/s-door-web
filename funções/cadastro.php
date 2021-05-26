<html>
<head>
<style>
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

	#menu > h1{
		font-style: italic;
		font-weight: 900;	
		font-family: 'Roboto', sans-serif;
		font-size:  40px;
		color:white;
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
		margin-top:15px;
	}

	input[type="submit"]:hover {
		background: #0f5132;
	}

	#campos{
		margin-top:100px;
		font-size: 20px;
	}

	#eye{
		right:155px;
		top:330px;
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
	#arrow {
		height:20px;
		width:20px;
		position:absolute;
		left:50px;
		top:30px;
		background-image:url("../imgs/left-arrow.svg")
	}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-dark text-white">	
	<div id="menu">
	<a href="../functions.php" ><div id="arrow"></div></a>
		<img src="../imgs/smart-lock.svg">
		<h1>SENAI</h1>
	</div>
		<div id="linha">
		</div>
		<div id="img">
			<img src="../imgs/sign-in 1.svg">
		</div>
	<form id="campos" method='POST' name='insert' action='../acesso/cadastrar.php'>
	<div class="container">
		<legend id="legend">CADASTRO DE USUÁRIO</legend>
			<div id="legend">
					<input type='text' name='nome' placeholder='nome'><br>
					<input id='senha' type='password' name='senha' placeholder='senha'><br>
					<img id="eye" onclick="mostrarSenha()" src="../imgs/eye.png">
					<br>
				<input type="submit" name="inserir" value="CADASTRAR">
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
		</script>
</body>
</html>