

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>HackerSpace - Try Hack Me</title>
		<link rel="icon" href="_images/icon.ico"/>
		<link rel="stylesheet" href="_css/styleTHM.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="interface">
			<div class="corpo">
				<header class="cabecalho">
					<h1>Projeto Servidor HackerSpace</h1>
					<a href="index.php"><img src="_images/logo.png"/></a> 
					<h2>Todo o conteúdo do Hackerspace armazenado!</h2>
				</header>
			<aside id="lateral">
				<nav id="menu">
						<h1>Menu Principal</h1>
						<ul>
							<a href="aulas.html"><li>aulas</li></a>
							<a href="encontros.html"><li>encontros</li></a>
							<a href="contatos.html"><li>contatos</li></a>
							<a href="arquivos.html"><li>arquivos</li></a>
							<a href="servidores.html"><li>servidores</li></a>
							<a href="TryHackMe.php"><li>Try Hack Me</li></a>
							<a href="projetos.html"><li>Projetos</li></a>
							<a href="artigos.html"><li>Artigos</li></a>
						</ul>
					</nav>
				</aside>
				<section id="corpo">
					<h3>Try Hack Me</h3>
					<p>Esta sessão do site se destina para ser uma página hackeável, onde você poderá testar seus conhecimentos tentando quebrar sua segurança. A página que você acessará após o login tem pontos específicos onde não tem segurança reforçada, ou seja, nem toda a página é insegura. Encontre as falhas e use o que aprendeu para se aproveitar delas. Para acessar a página hackeável, faça o login:</p>
					<?php
						session_start();
						if(isset($_SESSION['erro'])){
							echo("<p style='text-align: center; color: #ff4040; margin-bottom: -5px;'>Usuário ou senha inválidos!</p>");
							unset($_SESSION['erro']);
						}
					?>
					<form method="post" id="fLogin" action="acesso.php">
						<p style="text-align: center;">Login</p>
						<fieldset id="login">
								<input type="text" name="nome" id="cNome" size="15" maxlength="15" placeholder="Usuário de login">
								<input type="password" name="senha" id="cSenha" size="15" maxlength="15" placeholder="Senha do usuário">
								<button type="submit" value="submit">Entrar</button>
						</fieldset>
					</form>
				</section>
				</div>
			<footer id="rodape"><p id="nome">Created by Vinícius Venturini</p><p>viniciusventurini@estudante.ufscar.br</p></footer>
		</div>
	</body>
</html>