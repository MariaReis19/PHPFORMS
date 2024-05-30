<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>

</head>
<body>
		<h2>Cadastro</h2>
		<form method="get" action="recebe_cadastro.php">
			
			Nome: <input type="text" name="nome"><br/><br/>
			Senha: <input type="password" name="senha"><br/><br/>
			<input type="checkbox" name="termouso" value="termo"/>
			Aceito o termo de uso <br/><br/>
			<input type="radio" name="sexo" value="fem"/>Feminino
			<input type="radio" name="sexo" value="mas"/>Masculino
			<br/>
			<input type="hidden" name="login" value="admin">
			<br/>
			&nbsp; &nbsp; &nbsp;
			<input type="button" name="VOLTAR">
			&nbsp; &nbsp; &nbsp;
			<input type="reset" name="LIMPAR">
			&nbsp; &nbsp; &nbsp;
			<input type="submit" name="ENVIAR"> 
		</form>
</body>
</html>