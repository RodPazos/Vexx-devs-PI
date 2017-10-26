<html>
<link href="template_cadastrar.css" rel="stylesheet" type="text/css">
 

	<body>
    			<ul>
		<li><a href="../user/index.php">Usuario</a></li>
		<li><a href="../categ/index.php">Categoria</a></li>
		<li><a href="../produto/index.php">Produto</a></li>
		<li><a href="../?logout=1">Sair</a></li>
</ul>
	<br><br>
<form id="form" method="post">
		
			Login: <input type="text" name="loginUsuario"><br><br>
			Senha: <input type="password" name="senhaUsuario"><br><br>
			Nome: <input type="text" name="nomeUsuario"><br><br>
			Perfil: <select name="perfilUsuario">
						<option value="">Escolha</option>
						<option value="A">Administrador</option>
						<option value="C">Colaborador</option>
					</select><br><br>
			Ativo: <input type="checkbox" name="usuarioAtivo"><br><br>
			<input type="submit" value="Gravar" name="btnGravar">
		
		</form>
		
	</body>
</html>