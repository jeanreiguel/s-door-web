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
		height: 350px;
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

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
	<div id="menu">
		<img src="imgs/smart-lock.svg">
		<h1>SENAI</h1>
	</div>
	<form method='POST' name='selecao' action='acesso/selecao.php'>
	<div id="opcoes">
		<fieldset id="campos">
			<legend>OPÇÕES</legend>
			
			<label>LISTAGEM</label>
				<input type='submit' name='opcao' value='listagem'>
			<label>CADASTRO</label>
				<input type='submit' name='opcao' value='cadastro'>
			<label>EDIÇÃO</label>
				<input type='submit' name='opcao' value='edicao'>
		</fieldset>
	</div>
</body>
</html>