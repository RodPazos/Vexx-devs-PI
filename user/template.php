<html>
	<head>
    <link rel="stylesheet" type="text/css" href="template_editar.css">
    
    </head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<body>
    			<ul>
		<li><a href="../user/index.php">Usuario</a></li>
		<li><a href="../categ/index.php">Categoria</a></li>
		<li><a href="../produto/index.php">Produto</a></li>
		<li><a href="../?logout=1">Sair</a></li>
</ul>
	<br><br>
		<a href="?cadastrar=1" class="button">Adicionar Usuario</a>
		<br>
        
		<?php
		if(isset($msg))
			echo "	<br><center><b><font color='green'>
					$msg</font></b></center><br>";
		if(isset($erro))
			echo "	<br><center><b><font color='red'>
					$erro</font></b></center><br>";
		?>
		<br>
		<table id="tabela">
			<thead>
            	<caption> Usuarios Cadastrados</caption>
				<tr>
		            <th></th>
    		        <th>Id</th>
        		    <th>Nome</th>
           	 		<th>Perfil</th>
	        	    <th>Ativo</th>
    	        	<th>Editar</th>
            	  	<th>Excluir</th>
            	</tr>
            </thead>
            	<tbody>
            	<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
            </tbody>
            
			<?php
			foreach($usuarios as $idUsuario => $dadosUsuario){
				
				echo "	<tr>
							<td>$idUsuario</td>
							<td>{$dadosUsuario['loginUsuario']}</td>
							<td>{$dadosUsuario['nomeUsuario']}</td>
							<td>{$dadosUsuario['tipoPerfil']}</td>
							<td>{$dadosUsuario['usuarioAtivo']}</td>
							<td><a href='?editar=$idUsuario'>e</a></td>
							<td><a href='?excluir=$idUsuario'>x</a></td>
						</tr>";
				
			}
			?>
		</table>
	</body>
</html>
		