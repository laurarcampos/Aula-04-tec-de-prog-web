<?php
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$idade = $_POST['idade'];
	$sexo = $_POST['sexo'];

	if ($idade >= 18) {
		echo "Meu nome é: " . $nome . "<br>";
		echo "Meu endereço é: " . $endereco . "<br>";
		echo "Minha idade é: " . $idade . "<br>";
		echo "Meu sexo é: " . $sexo . "<br>";
	} else {
        echo "Meu nome é: " . $nome . "<br>";
        echo "Minha idade é: " . $idade . "<br>";
		echo "<h3>" . "Menor de idade<br>" . "</h3>";
	}
?>