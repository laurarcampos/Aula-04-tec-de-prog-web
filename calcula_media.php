<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$media = floatval($_POST['media']);

		if ($media <= 1.7) {
			echo "<p>Não há exame que te salve, sua média é igual ou menor a 1.7</p>";
            echo "<p><a href='./atividade3.html'>Calcular novamente</a></p>";
		}
		else if ($media >= 7.0) {
			echo "<p>Parabéns, você está aprovado e não precisará prestar exame</p>";
            echo "<p><a href='./atividade3.html'>Calcular novamente</a></p>";
		}
		else {
			$ne = (50 - 6 * $media) / 4;
			echo "<p>Você precisa tirar pelo menos " . number_format($ne, 2, '.', '') . " para ser aprovado.</p>";
            echo "<p><a href='./atividade3.html'>Calcular novamente</a></p>";
        }
	}
?>