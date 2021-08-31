<html>
	<head>
		<title>Cliente Index</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset = "utf-8">
		<style>
			body{
				padding: 0;
				margin: 0;
				
				max-width: 1024px;
				margin: 0 auto;
			}
			header{
				width: 100%;
				background-color: red;
				min-height: 50px;
				display:flex;
				justify-content: center;
				min-width: 300px; 
				
			}
			#menu{
				list-style: none;
				background-color:red;
				
				display:flex;
				justify-content: space-between;
				align-items: center;

				width: 10%;
				min-height: 50px;
				min-width: 100px;
			}
			#menu li{
				background-color: red;
				border-bottom: 1px solid white;
				
			}
			#menu li a{
				text-decoration: none;
				color: white;
				font-weight: bold;
			}
			#conteiner{
				border-top: 5px solid darkblue;
				display: flex;
				flex-wrap: wrap;
				background-color: white;
			}
			#cont-list{
				background-color: white;
				width: 60%;
				min-width: 360px;
				border-left: solid darkblue 1px;
			}
			#cont-list table{
				width:100%;
				min-width:357px;
				background-color:white;
				color: white;
			}
			.cont-list-table-tth1{
				background-color:red;
				min-width:50px;
				width:14%;
			}
			.cont-list-table-tth2{
				background-color:darkred;
				min-width:100px;
				width:24%;
			}
			.cont-list-table-tbtr1{
				background-color:#F8F8FF;
				color: red;
				width: 100%;
			}
			.cont-list-table-tbtr2{
				background-color:white;
				color: red;
				width: 100%;
			}
			.cont-list-table-tbtd{
				width:10%;
			}
			#formulario{
				background-color: white;
				display: flex;
				flex-wrap:wrap;
				min-width: 300px;
				width: 39%;
				border-right: solid darkblue 1px;
				
			}
			.titulo{
				display: flex;	
				width: 100%;
				height: 71px;
				
			}
			.titulo p{
				background-color: red;
				width:100%;
				text-align: center;
				padding-top: 2%;
				color: white;
				font-weight: bold;	
			}
			
			#campos{
				background-color: white;
				display: flex;				
				flex-wrap:wrap;
				width: 100%;
				padding-left:1%;
				
				
			}
			#campos input{
				min-width: 250px;
				height: 50px;
			}
			#campos label{
				text-align: right;
				min-width: 200px;
				height: 50px;
				margin-right: 1%;
				color: red;
				font-weight: bold;
			}
			#botSalvar{
				background-color: white;
				width: 100%;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			#botSalvar input{
				min-width: 150px;
				min-height: 35px;
				color: white;
				background-color: red;
				border: red;
			}
			footer{
				width: 100%;
				min-width: 300px;
				background-color: red;
				height: 50px;
				padding: 20px;
				color: white;
				font-weight: bold;
			}
			#bot{
				background-color: red;
				width: 100%;
				sborder-radius: 2px;
				text-align: center;
				font-weight: bold;
				font-family: Arial;
				border-color: red;
				color: white;
		
			}
			#bot2{
				background-color: gray;
				width: 100%;
				display:block;
				line-height: 10px;
				padding: 6px 1px;
				margin-bottom: 15px;
				color: white;
				text-decoration:none;
				border-radius: 2px;
				text-align: center;
				font-weight: bold;
				font-family: Arial;
			}
		</style>
	</head>
	<body>
		<header>
			
			<nav id = "menu">
				<li><a href = '#'>Home</a></li>
				<li><a href = '#'>Sobre</a></li>
			</nav>
		</header>
		<section>
			<div id = 'conteiner'>
					<form id = "formulario" method = "post"  action = '/cliente'>
						@csrf
						<div class = "titulo"><p>Cadastre os clientes abaixo:</p></div>
						<div id = 'campos'>
							<input type = "hidden" id = "id" name = "id" value = "{{$cliente->id}}"/>
							<label for = 'campoNome'>Nome: </label>
							<input type = 'text' name = 'nome' id = 'campoNome' value = "{{$cliente->nome}}"/>
							<label for = 'campoCpf'>CPF: </label>
							<input type = 'text' name = 'cpf' id = 'campoCpf' value = "{{$cliente->cpf}}" />
							<label for = 'campoEmail'>E-mail: </label>
							<input type = 'text' name = 'email' id = 'campoEmail' value = "{{$cliente->email}}" />
							<label for = 'campoTelefone'>Telefone: </label>
							<input type = 'text' name = 'telefone' id = 'campoTelefone' value = "{{$cliente->telefone}}" />
							<label for = 'campoDataNascimento'>Data de nascimento: </label>
							<input type = 'date' name = 'data_nascimento' id = 'campoDataNascimento' value = "{{$cliente->data_nascimento}}" />
						</div>
						<div id = 'botSalvar'>
							<input type = 'submit' value = 'Salvar' name = 'save'/>
						</div>
					</form>
					<div id = 'cont-list'>
						<div class = "titulo"><p>Lista dos clientes abaixo:</p></div>
						<table>
							<thead>
								<th class = "cont-list-table-tth1">Nome</th>
								<th class = "cont-list-table-tth1">E-mail</th>
								<th class = "cont-list-table-tth1">CPF</th>
								<th class = "cont-list-table-tth1">Telefone</th>
								<th class = "cont-list-table-tth1">Data de Nascimento</th>
								<th class = "cont-list-table-tth2" colspan = '2'>Ações</th>
							</thead>
							<tbody>
							<?php $linha = 1;?>
							@foreach($clientes as $cliente)
						      <tr class = <?php echo "'cont-list-table-tbtr".$linha."'";?>>
									<td class = 'cont-list-table-tbtd'>{{$cliente->nome}}</td>
									<td class = 'cont-list-table-tbtd'>{{$cliente->email}}</td>
									<td class = 'cont-list-table-tbtd'>{{$cliente->cpf}}</td>
									<td class = 'cont-list-table-tbtd'>{{$cliente->telefone}}</td>
									<td class = 'cont-list-table-tbtd'>{{$cliente->data_nascimento}}</td>
					    			<td class = 'cont-list-table-tbtd'> 
										<form action="/cliente/{{$cliente->id}}" method = "POST">
											@csrf 
											<input type = "hidden" name="_method" value = "DELETE"/>
											<input id = 'bot' type = "submit" value = "Excluir"/>
										</form>
									</td>
									<td class = 'cont-list-table-tbtd'>
										<a id = 'bot2' href= "/cliente/{{$cliente->id}}/edit">Editar</a>
									</td>
									<?php $linha = $linha == 2?1:2;?>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
			</div>
			<footer>
				By: Melquesedeque Oliveira da Silva
			</footer>
		<section>
	</body>
</html>