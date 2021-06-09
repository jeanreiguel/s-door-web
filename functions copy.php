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
	#campos{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		font-size: 25px;
	}

	#opcoes{
		margin-top:100px;
		width: 500px;
		height: 450px;
		background-color: #00473B;
		border-radius:20px;
	}

	legend{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}

	label{
		margin:10px;
	}

	input[type="submit"] {
		width:200px;
		cursor: pointer;
		border: none;
		border-radius: 5px;
		background: #479f76;
		color: white;
		font-size: 1.1rem;
		transition: all .3s ease-in-out;
	}
	#estadoporta input[type="submit"] {
		width:90px;
		cursor: pointer;
		border: none;
		border-radius: 5px;
		background: black;
		color: white;
	}
	input[type="submit"]:hover {
		background: #0f5132;
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
	#estadoporta {
		height:200px;
		width:300px;
		background-color: #00473B;
		position: absolute;
		right:50;
		top:100;
		border-radius:10%;
		padding:15px;
	}
	#camposstatus{
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: space-evenly;
		font-size: 25px;
	}
	#estadoporta h1 {
		margin:30px;
		font-size:20px;
		text-align:center;
	}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php 
if(isset($_GET["user"])){ $user = $_GET["user"]; };
if(isset($_GET["estado"])){ $estado = $_GET["estado"]; };

if(isset($_GET['msg'])) {
	if($_GET['msg'] == 'log') {
		echo "
      <html>
      <script>
          alert('-------- SUCESSO AO $estado ------');
          </script>
      </html>	";
	}else if($_GET['msg'] == 'logerror') {
		echo "
			<script>
			alert('ERRO AO $estado');
			</script>
		";
	}
}
	?>
<body class="bg-dark text-white">
	<div id="menu">
		<img src="imgs/smart-lock.svg">
		<h1>SENAI</h1>
	</div>
	<form method='GET' name='selecao' action='acesso/porta.php'>
	<div id="estadoporta">
	<h1>ESTADO ATUAL ********</h1>
	<fieldset id="camposstatus">
		<input type="hidden" name="user" value=<?php echo $user ?>>	
		<input type="submit" name="estado" value="ABRIR" class="itens">
		<input type="submit" name="estado" value="FECHAR" class="itens">
		</fieldset>
	</div>
	</form>
</body>
</html>