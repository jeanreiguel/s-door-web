<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
	* {
		padding: 0;
		margin: 0;
		font-family: sans-serif;
	}
	#table {
		width:100%;
		max-height:400px;
		border-collapse:collapse;
		font-size: 0.9em;
	}
	#table th,
	#table td {
  padding: 12px 15px;
}
#table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

#table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
	#table tbody tr {
  border-bottom: 1px solid #dddddd;
}
	thead {
		background-color: #009879;
		height:50px;
		color: #ffffff;
		text-align: center;
		font-weight: bold;
	}
	#scroll {
		width:60%;
		margin-top:15%;
		height:400px;
		overflow:scroll;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		border-bottom: 2px solid #009879;
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
</head>
<body>
<div id="menu">
		<a href="../functions.php?user=$user">
		<img src="../imgs/smart-lock.svg">
	<h1>SENAI</h1>
	</a>
</div>	
<div id="scroll">
	<table id='table'>
		<thead>
			<tr>
				<th><p>CÓDIGO</p></th>
				<th><p>NOME</p></th>
				<th><p>SENHA</p></th>
				<th><p>CARTÃO</p></th>
				<th><p>DELETE</p></th>
			</tr>
		</thead>
		<tbody>
		<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td  scope='col'><p>a</p></th>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr><tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr><tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr><tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr><tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr><tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr><tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr><tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
			<tr>
				<td scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
				<td  scope='col'><p>a</p></td>
			</tr>
		</tbody>
	</table>
	</div>
</body>
</html>