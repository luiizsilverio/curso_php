<?php 
		include 'header.php';
		$aula_atual = 'loops-for-while';
	?>


	<body>

		<h2>LOOPS WHILE e FOR</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>Selecione o ano de nascimento:</h3>

    <?php 
      $ano_atual = date('Y'); 
      $ano = $ano_atual;
    ?>


		<select>
			<option>Selecione o ano</option>

      <?php while ($ano > 1980) { ?>
        <option><?php echo $ano; ?></option>
        <?php $ano -= 1; ?>
      <?php } ?>

    </select>

		<h3>Selecione o ano estimado de aposentadoria:</h3>

		<select>
			<option>Selecione o ano</option>

      <?php for ($ano = $ano_atual ; $ano < 2050; $ano += 1) { ?>
        <option><?php echo $ano; ?></option>
      <?php } ?>

		</select>

			

		<h3>Agora é a sua vez.</h3>

		<p>Use o loop for ou while para apresentar os anos em que vão haver Copa do mundo e Olímpiadas, até 2050.</p>

		<h4>Anos de Copa do Mundo: </h4>

		<?php
			$copas = '';

			for ($ano = 2002; $ano < 2100; $ano += 4) { 
				$copas = $copas . $ano . ', ';
			};

			$copas = substr($copas, 0, strlen($copas) -2);
		?>


		<p>apresente aqui os anos</p>
		<br>
		<p><?php echo $copas; ?></p>

		<h4>Anos de Olimpíadas: </h4>

		<?php
			$jogos = '';

			for ($ano = 2000; $ano < 2100; $ano += 4) { 
				$jogos = $jogos . $ano . ', ';
			};

			$jogos = substr($jogos, 0, strlen($jogos) -2);
		?>

		<p>apresente aqui os anos</p>
		<br>
		<p><?php echo $jogos; ?></p>

		





		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>