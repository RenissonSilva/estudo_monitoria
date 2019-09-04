<!DOCTYPE html>
<html>
<head>
	<title>Registro/Login</title>
</head>
<body>
<div class="login">
			<form action="login.php" method="POST">
				<input type="text" name="name" placeholder="Nome">
				<input type="password" name="pw" placeholder="Password">
				<input type="submit" value="Entrar">
			</form>
		</div>
		<div class="cadastrar">
			<form action="cadastrar.php" method="POST">
				<input type="text" name="name" placeholder="Nome">
				<input type="email" name="email" placeholder="Email">
				<input type="password" name="pw" placeholder="Password">
				<input type="password" name="pw2" placeholder="Password Confirm">
				<input type="submit" name="Cadastrar" value="Cadastrar">		
			</form>
		</div>

		<a href="tabela.php">Ver tabela</a>
</body>
</html>