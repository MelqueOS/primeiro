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
				display: flex;				
				flex-wrap:wrap;
				background-color: white;
				width: 49%;
				min-width: 300px;
				
				border-left: solid darkblue 1px;
			}
			#cont-list p{
				background-color: red;
				width:100%;
				text-align: center;
				padding-top: 2%;
				padding-bottom: 2%;
				font-weight: bold;
				color: white;
			}
			#cont-list ul{
				background-color: white;
				width:100%;
				list-style: none;
				padding: 1%;
				
			}
			
			#cont-list ul li{
				background-color: red;
				width:100%;
				min-height: 45px;
				margin-top: 1%;
				padding-left: 1%;
				padding-top: 5%;
				border-top: 1px solid ;
				border-radius: 5px ;
				color:white;
				word-break: break-word;
			    font-weight: bold;
			}
			
			#formulario{
				background-color: white;
				display: flex;
				flex-wrap:wrap;
				min-width: 300px;
				width: 49%;
				border-right: solid darkblue 1px;
				
			}
			#titulo{
				display: flex;	
				width: 100%;
				height: 71px;
				
			}
			#titulo p{
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
					<form id = "formulario">
						<div id = "titulo"><p>Cadastre os clientes abaixo:</p></div>
						<div id = 'campos'>
							<label for = 'campoNome'>Nome: </label>
							<input type = 'text' name = 'nome' id = 'campoNome'>
							<label for = 'campoCpf'>CPF: </label>
							<input type = 'text' name = 'cpf' id = 'campoCpf'>
							<label for = 'campoEmail'>E-mail: </label>
							<input type = 'text' name = 'email' id = 'campoEmail'>
							<label for = 'campoTelefone'>Telefone: </label>
							<input type = 'text' name = 'telefone' id = 'campoTelefone'>
							<label for = 'campoDataNascimento'>Data de nascimento: </label>
							<input type = 'date' name = 'dtNasc' id = 'campoDataNascimento'>
						</div>
						<div id = 'botSalvar'>
							<input type = 'submit' value = 'Salvar' name = 'save'/>
						</div>
					</form>
					<div id = 'cont-list'>
						<p>Lista dos clientes abaixo:</p>
						<ul>
							<li>Elemento 1, sobre a lista</li>
							<li>Elemento 2, essa é uma lista estatica</li>
							<li>Elemento 3, os elementos dessa lista serão substituidos pelos clientee/li>
							<li>Elemento 4, os elementos dessa lista servirão para visualização do laiout</li>
							<li>Elemento 5, os elementos dessa lista não representam dados de reais de um banco de dados</li>
						</ul>
					</div>
			</div>
			<footer>
				By: Meqluesedeque Oliveira da Silva
			</footer>
		<section>
	</body>
</html>