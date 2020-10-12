<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>
	<body>
		<?php 

			//VARIAVEIS--------------- :)

			//int
			$valor_inteiro = 1;
			echo $valor_inteiro;
			
			echo '<br />';
			
			$valor_inteiro = $valor_inteiro + 2;
			echo $valor_inteiro;

			echo '<br />';

			//float
			$valor_fracionario = 10.7;
			echo $valor_fracionario;

			echo '<br />';

			//boolean
			$estado = true;
			echo $estado;

			echo '<br />';
			//strings
			$texto1 = "Curso de php - $valor_inteiro";
			$texto2 = 'Curso de php -' .$valor_inteiro;
			
			echo $texto1;
			echo '<br />';
			echo $texto2;

			//arrays
			$mensagens_divertidas[1] = 'Comendo arroz';
			$mensagens_divertidas[2] = 'Comendo feijão';
			$mensagens_divertidas[3] = 'Comendo macarrão';
			$mensagens_divertidas[4] = 'Comendo beterraba';
			echo '<br />';
			var_dump($mensagens_divertidas);
			echo '<br />';
			print_r($mensagens_divertidas);
			echo '<br />';
			//USO O ECHO QUANDO ESPECIFICO O INDICE
			echo $mensagens_divertidas[2];

			//passando valores por parametro
			$mensagens_divertidas_par = 
			array('1' => 'Comendo arroz', 
			'2' => 'Comendo feijão', 
			'3' => 'Comendo macarrão');
			echo '<br/>';
			var_dump($mensagens_divertidas_par);


		?>
	</body>
</html>