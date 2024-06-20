	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'and-or';
	?>


	<body>


		<h2>AND e OR</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<?php

		$total_aulas = 20;
		$media_aprov = 6;
		$presenca_aprov = 0.7;

		$aluno = array (
			'nome' => 'Fernando Costa',
			'media' => 7.5,
			'faltas' => 8
		);

    $presenca_aluno = ($total_aulas - $aluno['faltas']) / $total_aulas;

		?>

		<h3>AND</h3>
		<h4>Situação do aluno: </h4>
		<p>
      <?php
        if ($aluno['media'] >= $media_aprov && $presenca_aluno >= $presenca_aprov) {
          echo 'Aprovado';
        } else {
          echo 'Reprovado';
        }
      ?>
    </p>
		<br>

		<h3>OR</h3>
		<h4>Situação do aluno: </h4>
		<p>
      <?php
        if ($aluno['media'] < $media_aprov || $presenca_aluno < $presenca_aprov) {
          echo 'Reprovado';
        } else {
          echo 'Aprovado';
        }
      ?>
    </p>
		<br>

		

		







		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>