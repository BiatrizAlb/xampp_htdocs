<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Tabuleiro Xadrez</title>
	</head>
	<body>
		<?php 
			$tabuleiro[8]['a'] = 'A';
			$tabuleiro[8]['b'] = 'B';
			$tabuleiro[8]['c'] = 'C';
			$tabuleiro[8]['d'] = 'D';
			$tabuleiro[8]['e'] = 'E';
			$tabuleiro[8]['f'] = 'F';
			$tabuleiro[8]['g'] = 'G';
			$tabuleiro[8]['h'] = 'H';

			$tabuleiro[7]['a'] = 'A';
			$tabuleiro[7]['b'] = 'B';
			$tabuleiro[7]['c'] = 'C';
			$tabuleiro[7]['d'] = 'D';
			$tabuleiro[7]['e'] = 'E';
			$tabuleiro[7]['f'] = 'F';
			$tabuleiro[7]['g'] = 'G';
			$tabuleiro[7]['h'] = 'H';

			var_dump($tabuleiro);	
			echo '<br/>';
			print $tabuleiro[7]['b'];
			echo '<br/>';
			print $tabuleiro[8]['h'];

		?>
	</body>
</html>