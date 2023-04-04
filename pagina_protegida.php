<?php
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if ($login === 'admin' && $senha === 'admin') {
		echo "<h1>Bem-vindo, " . $login . "!</h1>";
		echo "<p>Você é um administrador da página.</p>";
        echo "<p><a href='./atividade2.html'>Sair</a></p>";
	} else {
		echo "<h1>Erro de login!</h1>";
		echo "<p>O nome de usuário ou a senha estão incorretos.</p>";
        echo "<p><a href='./atividade2.html'>Voltar para a tela de login</a></p>";
	}
?>
